<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\UsersDataTable;
use App\Models\User;
use App\Helpers\AuthHelper;
use App\Http\Requests\User\StoreRequest;
use Spatie\Permission\Models\Role;
use App\Http\Requests\UserRequest;
use App\Models\Employee;
use App\Models\UserStatus;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UsersDataTable $dataTable)
    {
        $titleSubHeader = "Usuarios";
        $descriptionSubHeader = "Listado de Usuarios";

        $pageTitle = "Lista Usuarios";
        $auth_user = AuthHelper::authSession();
        $assets = ['data-table'];
        $headerAction = '<a href="'.route('usuarios.create').'" class="btn btn-sm btn-primary" role="button">Registrar Nuevo Usuario</a>';
        return $dataTable->render('global.datatable', compact('pageTitle','auth_user','assets', 'titleSubHeader', 'descriptionSubHeader', 'headerAction'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleSubHeader = "Usuarios";
        $descriptionSubHeader = "Alta de Usuario";

        $userRoles = Role::where('status',1)->get()->pluck('id', 'title');

        return view('users.register', compact('userRoles', 'titleSubHeader', 'descriptionSubHeader'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        try{
            $employee = Employee::findOrFail($request->number_r);

            if($employee->employee_status_id == 2){
                $status = 'error';
                $message= 'Usuario no valido . . . ';

                return redirect()->route('usuarios.index')->with($status,$message);
            }

            if($employee->name == $request->name &&
               $employee->last_name == $request->last_name &&
               $employee->positionType->type == $request->position &&
               $employee->email == $request->email){

                $newUser = new User();
                $newUser->first_name = $request->name;
                $newUser->last_name = $request->last_name;
                $newUser->email = $request->email;
                $newUser->user_type = Role::find($request->role)->name;
                $newUser->assignRole(Role::find($request->role)->name);
                $newUser->user_status_id = 1;
                $newUser->employee_id = $request->number_r;
                $newUser->password = bcrypt($request->password);
                $newUser->save();

            }else{
                $status = 'error';
                $message= 'Los datos no coinciden (0x2), por favor verifique';

                return redirect()->route('usuarios.create')->withInput($request->toArray())->with($status,$message);
            }
        }catch(ModelNotFoundException $ex){
            $status = 'error';
            $message= 'Usuario no encontrado . . . ';

            return redirect()->route('usuarios.create')->withInput($request->toArray())->with($status,$message);
        }

        $status = 'success';
        $message = 'Se a registrado al usuario: ' . $request->email . '\n' . 'correctamente';
        return redirect()->route('usuarios.index')->with($status,$message);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return redirect()->route('usuarios.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try{
            $user = User::with('userStatus', 'roles', 'employee')->findOrFail($id);
            $userAuth = Auth::user();

            if($user->hasRole('dev') && $userAuth->hasRole('admin')){
                $status = 'error';
                $message= 'Usuario no valido';

                return redirect()->route('usuarios.index')->with($status,$message);
            }

            $userRoles = Role::pluck('id', 'title');
            $userStatus = UserStatus::pluck('id', 'status');
            $diableRoleInput = false;
            $diableStatusInput = false;

            if($user->hasPermissionTo('dashboard.users') && $userAuth->id === $user->id){
                $diableRoleInput = true;
            }

            if($userAuth->id === $user->id){
                $diableStatusInput = true;
            }

            $titleSubHeader = "Usuarios";
            $descriptionSubHeader = "Actualización de Usuario";

            return view('users.edit', compact('user', 'userRoles', 'userStatus', 'diableRoleInput', 'diableStatusInput', 'titleSubHeader', 'descriptionSubHeader'));

        }catch(ModelNotFoundException $ex){
            $status = 'error';
            $message= 'No se encuentra el registro con el id proporcionado';

            return redirect()->route('usuarios.index')->with($status,$message);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        if (!empty($request['password']) || !empty($request['password_confirmation'])) {
            // Aplicar reglas de validación específicas para la contraseña
            $passwordValidationRules = [
                'password' => ['required', 'string', 'confirmed', 'min:8'], // Puedes ajustar estas reglas según tus estándares de seguridad
            ];

            // Validar los datos de la contraseña
            $request->validate($passwordValidationRules);
        }

        try{
            $user = User::findOrFail($id);
            $userAuth = Auth::user();

            if(!($user->hasPermissionTo('dashboard.users') && $userAuth->id === $user->id)){
                $user->user_type = Role::find($request->role)->name;

                // Obtener el nuevo rol al que deseas asignar al usuario
                $newRole = Role::where('name', $user->user_type)->first();

                if ($user && $newRole) {
                    // Quitar cualquier rol anterior que el usuario pudiera tener
                    $user->syncRoles([$newRole->id]);
                }
            }

            if(!($userAuth->id === $user->id)){
                $user->user_status_id = intval($request->status_e);
            }

            $user->email = $request->email;

            $user->password = $request->password != '' ? bcrypt($request->password) : $user->password;

            $user->save();

            $status = 'success';
            $message = 'Se ha actualizado al usuario: ' . $request->email . '\n' . 'correctamente';

            return redirect()->route('usuarios.index')->with($status,$message);

        }catch(ModelNotFoundException $ex){
            $status = 'error';
            $message= 'Registro Invalido';

            return redirect()->route('usuarios.index')->with($status,$message);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        try{
            $plainTextPassword = "";
            $user = User::findOrFail($id);

            if (Hash::check($plainTextPassword, $user->password)) {
                Auth::logoutOtherDevices($plainTextPassword); // La contraseña en texto plano se utiliza para validar el cierre de sesión en otros dispositivos
            }
            $user->roles()->detach();
            $user->permissions()->detach();


            $user->delete();

            $status = 'success';
            $message= 'Usuario eliminado con exito';
            $datatable_reload = 'dataTable_wrapper';


            return redirect()->route('usuarios.index')->with($status,$message, $datatable_reload);

        }catch(ModelNotFoundException $ex){
            $status = 'error';
            $message= 'Usuario no encontrado.';

            return redirect()->route('usuarios.index')->with($status,$message);
        }

    }
}
