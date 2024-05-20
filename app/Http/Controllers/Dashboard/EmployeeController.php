<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\EmployeesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreRequest;
use App\Http\Requests\Employee\UpdateRequest;
use App\Mail\WelcomeMailable;
use App\Models\Employee;
use App\Models\EmployeeStatus;
use App\Models\PositionType;
use App\Models\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Ramsey\Uuid\Type\Integer;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(EmployeesDataTable $dataTable)
    {
        $titleSubHeader = "Empleados";
        $descriptionSubHeader = "Listado de empleados";

        $pageTitle = "Empleados";
        $assets = ['data-table'];
        $headerAction = '<a href="'.route('empleados.create').'" class="btn btn-sm btn-primary" role="button">Registrar Empleado</a>';
        #return view('dashboards.dashboard', compact('assets'));
        return $dataTable->render('global.datatable', compact('pageTitle','assets', 'titleSubHeader', 'descriptionSubHeader', 'headerAction'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $titleSubHeader = "Empleados";
        $descriptionSubHeader = "Registrar nuevo empleado";

        $positionType = PositionType::pluck('id', 'type');

        return view('employees.register', compact('titleSubHeader', 'descriptionSubHeader', 'positionType'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $newEmployee = new Employee();

        $newEmployee->name = $request->name;
        $newEmployee->last_name = $request->last_name;
        $newEmployee->date_birthday = date('Y-m-d', strtotime($request->date_of_birth));
        $newEmployee->email = $request->email;
        $newEmployee->phone_number = $request->phone_number;
        $newEmployee->state = $request->state;
        $newEmployee->city = $request->city;
        $newEmployee->street_number = $request->street_number;
        $newEmployee->alternative_contact_name = $request->alternative_contact_name;
        $newEmployee->alternative_contact_phone_number = $request->alternative_contact_phone_number;
        $newEmployee->position_type_id = $request->position;

        $newEmployee->employee_status_id = 1; //Estatus Activo

        $newEmployee->save();

        if($request->send_confirmation_mail == "1"){
            Mail::to($newEmployee->email)->send(new WelcomeMailable($newEmployee));
        }

        $status = 'success';
        $message= __('global.save_form_success', ['form' => (string)$newEmployee->id]);


        if($request->stay_on_this_page == "1"){
            return redirect()->route('empleados.create')->with($status,$message);
        }else{
            return redirect()->route('empleados.index')->with($status,$message);
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        return redirect()->route('empleados.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        try{
            $employee = Employee::with('positionType')->findOrFail($id);

            $titleSubHeader = "Empleados";
            $descriptionSubHeader = "Actualizar datos empleado";

            $positionType = PositionType::pluck('id', 'type');
            $employeeStatus = EmployeeStatus::pluck('id', 'status');

            $employee->date_birthday = date('Y-m-d', strtotime($employee->date_birthday));

            return view('employees.edit', compact('titleSubHeader', 'descriptionSubHeader', 'employee', 'positionType', 'employeeStatus'));

        }catch(ModelNotFoundException $ex){
            $status = 'error';
            $message= 'No se encuentra el registro con el id proporcionado';

            return redirect()->route('empleados.index')->with($status,$message);

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $status = "undefinied";
        $message = "Mensaje no establecido";

        try{
            $dataEmployee = Employee::findOrFail($id);

            $dataEmployee->name = $request->name;
            $dataEmployee->last_name = $request->last_name;
            $dataEmployee->date_birthday = date('Y-m-d', strtotime($request->date_of_birth));
            $dataEmployee->email = $request->email;
            $dataEmployee->phone_number = $request->phone_number;
            $dataEmployee->state = $request->state;
            $dataEmployee->city = $request->city;
            $dataEmployee->street_number = $request->street_number;
            $dataEmployee->alternative_contact_name = $request->alternative_contact_name;
            $dataEmployee->alternative_contact_phone_number = $request->alternative_contact_phone_number;
            $dataEmployee->position_type_id = $request->position;
            $dataEmployee->employee_status_id = $request->status_e;

            $dataEmployee->save();

            $status = "success";
            $message = __('global.update_form_success', ['form' => (string)$dataEmployee->id]);;

        }catch(ModelNotFoundException $ex){
            $status = 'error';
            $message= 'No se encuentra el registro con el id proporcionado';

        }

        return redirect()->route('empleados.index')->with($status,$message);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $status = "undefinied";
        $message = "Mensaje no establecido";

        try{
            $employee = Employee::findOrFail($id);

            if($employee != '') {
                $employee->delete();
                $status = 'success';
                $message= __('global.delete_form', ['form' => __('employee.name')]);

                if(request()->ajax()) {
                    return response()->json(['status' => true, 'message' => $message, 'datatable_reload' => 'dataTable_wrapper']);
                }
            }

        }catch(ModelNotFoundException $ex){
            $status = 'errors';
            $message= 'No se encuentra el registro con el id proporcionado';

        }

        return redirect()->back()->with($status,$message);
    }

    public function getEmployee(int $id)
    {
        // Busca el empleado por su ID
        try{
            $employee = Employee::findOrFail($id);

            if($employee->user){
                return response()->json([
                    'status' => '405'
                ]);
            }elseif($employee->employee_status_id == 2){
                return response()->json([
                    'status' => '406'
                ]);
            }else{
                return response()->json([
                    'name' => $employee->name,
                    'last_name' => $employee->last_name,
                    'positionType' => $employee->positionType->type,
                    'number_r' => $employee->id,
                    'email' => $employee->email
                ]);
            }

        }catch(ModelNotFoundException $ex){
            return response()->json([
                'status' => '404'
            ]);
        }
    }

    public function searchVeterinarians(Request $request)
    {
        $searchQuery = $request->input('searchQuery');

        $veterinarians = Employee::where('position_type_id', 1)
        ->where(function($query) use ($searchQuery) {
            $query->where(DB::raw("CONCAT(id, ' ', name, ' ', last_name)"), 'LIKE', "%$searchQuery%");
        })
        ->get()
        ->map(function($employee) {
            return [
                'id' => $employee->id,
                'name' => $employee->name,
                'full_name' => $employee->name . ' ' . $employee->last_name,
            ];
        });

        return response()->json($veterinarians);
    }


}
