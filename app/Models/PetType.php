<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PetType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function pets() : HasMany
    {
        return $this->hasMany(Pet::class);
    }
}
