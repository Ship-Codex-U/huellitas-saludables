<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class UsersDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->editColumn('user_type', function($query) {
                return $query->roles->first()->title;
            })
            ->editColumn('userStatus.status', function ($query) {
                $status = $query->userStatus->status ?? '-';
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
            ->editColumn('created_at', function($query) {
                return date('Y/m/d',strtotime($query->created_at));
            })
            ->filterColumn('full_name', function($query, $keyword) {
                $sql = "CONCAT(users.first_name,' ',users.last_name)  like ?";
                return $query->whereRaw($sql, ["%{$keyword}%"]);
            })
            ->filterColumn('userProfile.company_name', function($query, $keyword) {
                return $query->orWhereHas('userProfile', function($q) use($keyword) {
                    $q->where('company_name', 'like', "%{$keyword}%");
                });
            })
            ->filterColumn('userProfile.country', function($query, $keyword) {
                return $query->orWhereHas('userProfile', function($q) use($keyword) {
                    $q->where('country', 'like', "%{$keyword}%");
                });
            })
            ->addColumn('action', 'users.action')
            ->addColumn('action-d', 'users.action-delete')
            ->rawColumns(['action', 'action-d','userStatus.status']);
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\User $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(User $model): QueryBuilder
    {
        $user = Auth::user();

        // Obtener el rol del usuario autenticado
        $userRole = $user->roles->first()->name;

        // Inicializar la consulta
        $query = $model->newQuery()->with('userProfile', 'userStatus');

        // Aplicar restricción basada en el rol del usuario autenticado
        if ($user->hasPermissionTo('dashboard.users')) {
            if(!$user->hasRole('dev')){
                return $query->whereDoesntHave('roles', function ($query) {
                    $query->where('name', 'dev');
                });
            }else{
                return $query;
            }
            // Si el usuario es administrador, mostrar todos los usuarios
            return $query;
        }
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('dataTable')
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
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make("id")->title("Numero Empleado")->name("id"),
            Column::make("first_name")->title("Nombre")->name("first_name"),
            Column::make("last_name")->title("Apellidos")->name("last_name"),
            Column::make("email")->title("Usuario")->name("email"),
            Column::make("userStatus.status")->title("Estatus")->name("userStatus.status")
            ->orderable(false)
            ->searchable(true),
            Column::make("created_at")->title("Alta de usuario")->name("created_at"),
            Column::make("user_type")->title("Rol")->name("user_type"),
            Column::computed('action')
                  ->exportable(true)
                  ->printable(true)
                  ->searchable(false)
                  ->width(60)
                  ->addClass('text-center hide-search')
                  ->title(''),
            Column::computed('action-d')
                  ->exportable(true)
                  ->printable(true)
                  ->searchable(false)
                  ->width(60)
                  ->addClass('text-center hide-search')
                  ->title(''),
        ];
    }

}
