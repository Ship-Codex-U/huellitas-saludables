<?php

namespace App\Http\Controllers\Dashboard;

use App\DataTables\EmployeesDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\StoreRequest;
use App\Mail\WelcomeMailable;
use App\Models\Employee;
use App\Models\PositionType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
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

        $newEmployee->save();

        if($request->send_confirmation_mail == "1"){
            Mail::to($newEmployee->email)->send(new WelcomeMailable($newEmployee));
        }


        return redirect()->route('empleados.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $titleSubHeader = "Empleados";
        $descriptionSubHeader = "Actualizar datos empleado";

        $positionType = PositionType::pluck('id', 'type');

        $employee = Employee::with('positionType')->findOrFail($id);

        return view('employees.edit', compact('titleSubHeader', 'descriptionSubHeader', 'positionType', 'employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $employee = Employee::findOrFail($id);
        $status = 'errors';
        $message= __('global.delete_form_error', ['form' => __('employee.name')]);

        if($employee != '') {
            $employee->delete();
            $status = 'success';
            $message= __('global.delete_form', ['form' => __('employee.name')]);
        }

        if(request()->ajax()) {
            return response()->json(['status' => true, 'message' => $message, 'datatable_reload' => 'dataTable_wrapper']);
        }

        return redirect()->back()->with($status,$message);
    }
}
