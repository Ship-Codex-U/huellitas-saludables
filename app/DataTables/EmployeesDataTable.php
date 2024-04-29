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
use Illuminate\Support\Facades\Log;

class EmployeesDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */

    public function debugQuery($query)
    {
        // Consulta SQL base
        $sql = $query->toSql();

        // Parámetros asociados a la consulta
        $bindings = $query->getBindings();

        // Registra la consulta SQL y los parámetros
        Log::info('Consulta SQL generada:', [
            'query' => $sql,
            'bindings' => $bindings,
        ]);
    }
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->editColumn('positionType.type', function($query) {
                return $query->positionType->type ?? '-';
            })
            ->editColumn('created_at', function($query) {
                return $query->created_at->format('d-m-Y') ?? '-';
            })
            ->editColumn('employeeStatus.status', function ($query) {
                $status = $query->employeeStatus->status ?? '-';
                $color = '';

                if ($status === 'activo') {
                    $color = 'success';
                } elseif ($status === 'baja') {
                    $color = 'danger';
                } else {
                    $color = 'secondary';
                }
                return '<span class="text-capitalize badge rounded-pill bg-'.$color.'">'.$status.'</span>';
            })
            ->addColumn('action', 'employees.action')
            ->rawColumns(['employeeStatus.status', 'action']);

    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Employee $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Employee $model): QueryBuilder
    {
        $query = $model->newQuery()->with('positionType', 'employeeStatus');

        return $query;
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
                        "stateSave" => false,
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
            Column::make("name")->title("Nombre")->name("name"),
            Column::make("last_name")->title("Apellidos")->name("last_name"),
            Column::make("positionType.type")->title("Puesto")->name("positionType.type")
            ->orderable(false)
            ->searchable(true),
            Column::make("created_at")->title("Fecha de Ingreso")->name("created_at"),
            Column::make("employeeStatus.status")->title("Estatus")->name("employeeStatus.status")
            ->orderable(false)
            ->searchable(true),
            Column::make("date_birthday")->title("Cumpleaños")->name("date_birthday"),
            Column::make("email")->title("Correo")->name("email"),
            Column::make("phone_number")->title("Numero")->name("phone_number"),
            Column::make("state")->title("Estado")->name("state"),
            Column::make("city")->title("Ciudad")->name("city"),
            Column::make("street_number")->title("Calle y numero")->name("street_number"),
            Column::make("alternative_contact_name")->title("Nombre CA")->name("alternative_contact_name"),
            Column::make("alternative_contact_phone_number")->title("Numero CA")->name("alternative_contact_phone_number"),
            Column::computed('action')
                ->title("")
                ->exportable(false)
                ->printable(false)
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
