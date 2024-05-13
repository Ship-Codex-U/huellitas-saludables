<?php

namespace App\DataTables;

use App\Models\Pet;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PetsDataTable extends DataTable
{
    /**
     * Construye la clase DataTable.
     *
     * @param QueryBuilder $query Resultados del método query().
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            // Agrega una columna de acciones para editar y eliminar mascotas
            ->addColumn('action', 'pets.action');
    }

    /**
     * Obtiene la fuente de la consulta de la tabla de datos.
     *
     * @param \App\Models\Pet $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Pet $model): QueryBuilder
    {
        // Retorna una nueva consulta con la relación 'customer' cargada
        return $model->newQuery()->with('customer');
    }

    /**
     * Método opcional si deseas utilizar el constructor de HTML.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html(): HtmlBuilder
    {
        // Configura las opciones generales del DataTable
        return $this->builder()
                    ->setTableId('pets-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('<"row align-items-center"<"col-md-2" l><"col-md-6" B><"col-md-4"f>><"table-responsive my-3" rt><"row align-items-center" <"col-md-6" i><"col-md-6" p>><"clear">')
                    ->parameters([
                        "processing" => true,
                        "autoWidth" => false,
                    ]);
    }

    /**
     * Obtiene la definición de las columnas de la tabla de datos.
     *
     * @return array
     */
    public function getColumns(): array
    {
        // Define las columnas que se mostrarán en la tabla
        return [
            Column::make("id")->title("ID")->name("id"),
            Column::make("customer.name")->title("Cliente")->name("customer.name")->searchable(true),
            Column::make("name")->title("Nombre")->name("name"),
            Column::make("pet_type")->title("Tipo")->name("pet_type"),
            Column::make("breed")->title("Raza")->name("breed"),
            Column::make("weight")->title("Peso")->name("weight"),
            Column::make("height")->title("Altura")->name("height"),
            // Define una columna computada para acciones
            Column::computed('action')
                ->exportable(true)
                ->printable(true)
                ->searchable(false)
                ->width(60)
                ->addClass('text-center hide-search'),
        ];
    }

    /**
     * Obtiene el nombre de archivo para la exportación.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Pets_' . date('YmdHis');
    }
}
