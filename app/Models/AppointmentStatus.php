<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AppointmentStatus extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function appointments() : HasMany
    {
        return $this->hasMany(Event::class);
    }
}
