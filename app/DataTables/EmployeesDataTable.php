<?php

namespace App\DataTables;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class EmployeesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('positionType.type', function($query) {
                return $query->positionType->type ?? '-';
            })
            ->addColumn('action', 'employees.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Employee $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Employee $model): QueryBuilder
    {
        return $model->newQuery()->with('positionType');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('employees-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('<"row align-items-center"<"col-md-2" l><"col-md-6" B><"col-md-4"f>><"table-responsive my-3" rt><"row align-items-center" <"col-md-6" i><"col-md-6" p>><"clear">')
                    ->parameters([
                        "processing" => true,
                        "autoWidth" => false,
                        "language" => [
                            "url" => asset('datatables/spanish_mx.json')
                        ]
                    ]);

    }

    /**
     * Get the dataTable columns definition.
     *
     * @return array
     */
    public function getColumns(): array
    {
        return [
            Column::make("id")->title("Numero Empleado")->name("id"),
            Column::make("name")->title("Nombre")->name("id"),
            Column::make("last_name")->title("Apellidos")->name("last_name"),
            Column::make("date_birthday")->title("Cumpleaños")->name("date_birthday"),
            Column::make("email")->title("Correo")->name("email"),
            Column::make("phone_number")->title("Numero")->name("phone_number"),
            Column::make("state")->title("Estado")->name("state"),
            Column::make("city")->title("Ciudad")->name("city"),
            Column::make("street_number")->title("Calle y numero")->name("street_number"),
            Column::make("alternative_contact_name")->title("Nombre CA")->name("alternative_contact_name"),
            Column::make("alternative_contact_phone_number")->title("Numero CA")->name("alternative_contact_phone_number"),
            Column::make("positionType.type")->title("Puesto")->name("positionType.type"),
            Column::computed('action')
                ->exportable(true)
                ->printable(true)
                ->searchable(false)
                ->width(60)
                ->addClass('text-center hide-search'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Employees_' . date('YmdHis');
    }
}
