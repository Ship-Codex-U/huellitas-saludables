<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    public function appointmets() : HasMany
    {
        return $this->hasMany(Appointment::class);
    }

    public function pets() : HasMany
    {
        return $this->hasMany(Pet::class);
    }


}
