<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;

    public function positionType() : BelongsTo
    {
        return $this->belongsTo(PetType::class);
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
}
