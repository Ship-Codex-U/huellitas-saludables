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
                $message= 'Los datos no coinciden 2, por favor verifique';

                return redirect()->route('usuarios.create')->withInput($request->toArray())->with($status,$message);
            }
        }catch(ModelNotFoundException $ex){
            $status = 'error';
            $message= 'Los datos no coinciden 1, por favor verifique';

            return redirect()->route('usuarios.create')->withInput($request->toArray())->with($status,$message);
        }

        $status = 'success';
        $message = 'Se a registrado al usuario: ' . $request->email . 'correctamente';
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
            $user = User::with('userStatus')->findOrFail($id);

        }catch(ModelNotFoundException $ex){

        }


        $data = User::with('userProfile','roles')->findOrFail($id);

        $data['user_type'] = $data->roles->pluck('id')[0] ?? null;

        $roles = Role::where('status',1)->get()->pluck('title', 'id');

        $profileImage = getSingleMedia($data, 'profile_image');

        return view('users.edit', compact('data','id', 'roles', 'profileImage'));
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
        // dd($request->all());
        $user = User::with('userProfile')->findOrFail($id);

        $role = Role::find($request->user_role);
        if(env('IS_DEMO')) {
            if($role->name === 'admin'&& $user->user_type === 'admin') {
                return redirect()->back()->with('error', 'Permission denied');
            }
        }
        $user->assignRole($role->name);

        $request['password'] = $request->password != '' ? bcrypt($request->password) : $user->password;

        // User user data...
        $user->fill($request->all())->update();

        // Save user image...
        if (isset($request->profile_image) && $request->profile_image != null) {
            $user->clearMediaCollection('profile_image');
            $user->addMediaFromRequest('profile_image')->toMediaCollection('profile_image');
        }

        // user profile data....
        $user->userProfile->fill($request->userProfile)->update();

        if(auth()->check()){
            return redirect()->route('usuarios.index')->withSuccess(__('message.msg_updated',['name' => __('message.user')]));
        }
        return redirect()->back()->withSuccess(__('message.msg_updated',['name' => 'My Profile']));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $status = 'errors';
        $message= __('global-message.delete_form', ['form' => __('users.title')]);

        if($user!='') {
            $user->delete();
            $status = 'success';
            $message= __('global-message.delete_form', ['form' => __('users.title')]);
        }

        if(request()->ajax()) {
            return response()->json(['status' => true, 'message' => $message, 'datatable_reload' => 'dataTable_wrapper']);
        }

        return redirect()->back()->with($status,$message);

    }
}
