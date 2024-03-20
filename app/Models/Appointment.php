<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Appointment extends Model
{
    use HasFactory;

    public function pet() : BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

    public function customer() : BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function appointmentStatus() : BelongsTo
    {
        return $this->belongsTo(AppointmentStatus::class);
    }

    public function consultationHistories() : HasMany
    {
        return $this->hasMany(ConsultationHistory::class);
    }
}
