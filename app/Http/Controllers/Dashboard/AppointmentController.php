<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Helpers\AuthHelper;
use App\Mail\confirmationMailable;
use App\Models\Appointment;
use App\Models\AppointmentStatus;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redis;
use App\Jobs\SendConfirmationEmail;
use App\Jobs\SendReconfirmationEmail;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $titleSubHeader = "Citas";
        $descriptionSubHeader = "Agenda de Citas";

        $appointmentStatus = AppointmentStatus::pluck('id', 'status');

        return view('appointments.calendar', compact('titleSubHeader', 'descriptionSubHeader', 'appointmentStatus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('errors.maintenance');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'startDate' => 'required|date_format:d/m/Y',
                'startTime' => 'required|date_format:H:i',
                'title' => 'required|string',
                'idCustomer' => 'required|integer|exists:customers,id',
                'idPet' => 'required|integer|exists:pets,id',
                'idVeterian' => 'required|integer|exists:employees,id',
                'comments' => 'nullable|string',
                'send_confirmation_mail' => 'nullable|integer'
            ]);

            $event = new Event();

            $dateTimeStr = str_replace('/', '-', $validatedData['startDate']) . ' ' . $validatedData['startTime'];
            $dateTime = Carbon::createFromFormat('d-m-Y H:i', $dateTimeStr);

            $event->title = $validatedData['title'];
            $event->customer_id = $validatedData['idCustomer'];
            $event->pet_id = $validatedData['idPet'];
            $event->employee_id = $validatedData['idVeterian'];
            $event->comments = $validatedData['comments'];
            $event->start = $dateTime;
            $event->appointment_status_id = 2;

            $event->save();

            if(isset($validatedData['send_confirmation_mail']) &&  $validatedData['send_confirmation_mail'] == "1"){
                SendConfirmationEmail::dispatch($event);
            }

            $status = 'success';
            $message= 'Cita creada Exitosamente';

            return response()->json(['message' => 'Cita registrada exitosamente'], 201);
        }catch (\Exception $e) {
            // Registrar el error
            Log::error('Error al registrar la cita: ' . $e->getMessage());
            return response()->json(['message' => 'Error al registrar la cita'], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Appointment $appointment)
    {
        $eventInfo = Event::all();
        return response()->json($eventInfo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        try{
            $eventInfo = Event::find($id);

            $dateTime = Carbon::parse($eventInfo->start);
            $dateF = $dateTime->format('d-m-Y');
            $dateT = $dateTime->format('H:i');

            $name_customer = $eventInfo->customer->name . " " . $eventInfo->customer->last_name;
            $name_pet = $eventInfo->pet->name;
            $name_employee = $eventInfo->employee->name . " " . $eventInfo->employee->last_name;

            $event = [
                'id' => $eventInfo->id,
                'title' => $eventInfo->title,
                'startDate' => $dateF,
                'startTime' => $dateT,
                'idCustomer' => $eventInfo->customer->id,
                'customer' => $name_customer,
                'idPet' => $eventInfo->pet->id,
                'pet' => $name_pet,
                'idVeterian' => $eventInfo->employee->id,
                'veterian' => $name_employee,
                'comments' => $eventInfo->comments,
                'status' => $eventInfo->appointmentStatus->id,
            ];

            return response()->json($event);

        }catch (\Exception $e) {
            // Registrar el error
            Log::error('Error al editar la cita: ' . $e->getMessage());
            return response()->json(['message' => 'Error al editar la cita'], 500);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        try{
            $validatedData = $request->validate([
                'startDateMD' => 'required|date_format:d-m-Y',
                'startTimeMD' => 'required|date_format:H:i',
                'titleMD' => 'required|string',
                'idCustomerMD' => 'required|integer|exists:customers,id',
                'idPetMD' => 'required|integer|exists:pets,id',
                'idVeterianMD' => 'required|integer|exists:employees,id',
                'commentsMD' => 'nullable|string',
                'status_eMD' => 'required|integer',
                'send_update_mailMD' => 'nullable|integer'
            ]);

            $event = Event::find($id);

            $dateTimeStr = $validatedData['startDateMD'] . ' ' . $validatedData['startTimeMD'];
            $dateTime = Carbon::createFromFormat('d-m-Y H:i', $dateTimeStr);

            $event->title = $validatedData['titleMD'];
            $event->customer_id = $validatedData['idCustomerMD'];
            $event->pet_id = $validatedData['idPetMD'];
            $event->employee_id = $validatedData['idVeterianMD'];
            $event->comments = $validatedData['commentsMD'];
            $event->start = $dateTime;
            $event->appointment_status_id = $validatedData['status_eMD'];

            $event->save();

            if(isset($validatedData['send_update_mailMD']) && $validatedData['send_update_mailMD'] == "1"){
                SendReconfirmationEmail::dispatch($event);
            }

            $status = 'success';
            $message= 'Cita creada Exitosamente';

            return response()->json(['message' => 'Cita actualizada exitosamente'], 201);
        }catch (\Exception $e) {
            // Registrar el error
            Log::error('Error al actualizar la cita: ' . $e->getMessage());
            return response()->json(['message' => 'Error al actualizar la cita'], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $event = Event::find($id)->delete();
        return response()->json($event);
    }

    public function getAppointments()
    {
        $user = Auth::user();
        $notFoundData = Null;

        if($user->hasPermissionTo('dashboard.appointments')){
            if ($user->hasRole('admin') || $user->hasRole('dev')) {
                $eventInfo = Event::all();
                return response()->json($eventInfo);

            }elseif($user->employee->positionType->type == "Veterinario"){
                $event = Event::where('employee_id', $user->employee->id);
                return response()->json(Event::where('employee_id', $user->employee->id)->get());
            }
        }

        return response()->json($notFoundData);
    }
}
