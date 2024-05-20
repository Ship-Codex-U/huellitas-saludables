<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Event extends Model
{
    use HasFactory;

    protected $fillable=['title', 'customer_id', 'pet_id', 'employee_id', 'comments', 'start', 'end'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function appointmentStatus() : BelongsTo
    {
        return $this->belongsTo(AppointmentStatus::class);
    }

    public function getDateAppointment(){
        $meses = [
            'January' => 'enero',
            'February' => 'febrero',
            'March' => 'marzo',
            'April' => 'abril',
            'May' => 'mayo',
            'June' => 'junio',
            'July' => 'julio',
            'August' => 'agosto',
            'September' => 'septiembre',
            'October' => 'octubre',
            'November' => 'noviembre',
            'December' => 'diciembre',
        ];

        $dias = [
            'Sunday' => 'domingo',
            'Monday' => 'lunes',
            'Tuesday' => 'martes',
            'Wednesday' => 'miércoles',
            'Thursday' => 'jueves',
            'Friday' => 'viernes',
            'Saturday' => 'sábado',
        ];

        $dateTime = Carbon::parse($this->start);
        $diaSemana = $dias[$dateTime->format('l')];
        $dia = $dateTime->format('d');
        $mes = $meses[$dateTime->format('F')];
        $ano = $dateTime->format('Y');

        return $diaSemana . ' ' . $dia . ' de ' . $mes . ' del ' . $ano;
    }

    public function getTimeAppointment(){
        $dateTime = Carbon::parse($this->start);
        return $dateTime->format('H:i');
    }
}
