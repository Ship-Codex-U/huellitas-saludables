<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Employee extends Model
{
    use HasFactory;

    public function positionType() : BelongsTo
    {
        return $this->belongsTo(PositionType::class);
    }

    public function vaccinatedPets() : HasMany
    {
        return $this->hasMany(PetVaccine::class);
    }

    public function consultationHistories() : HasMany
    {
        return $this->hasMany(ConsultationHistory::class);
    }

    public function appointmets() : HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function user() : HasOne
    {
        return $this->hasOne(User::class);
    }

    public function employeeStatus() : BelongsTo
    {
        return $this->belongsTo(EmployeeStatus::class);
    }

    public function scopeVeterinarians($query)
    {
        return $query->whereHas('positionType', function($query) {
            $query->where('name', 'Veterinario');
        });
    }
}
