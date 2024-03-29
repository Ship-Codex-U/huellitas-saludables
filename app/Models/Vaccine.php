<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Vaccine extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    public function pets(): BelongsToMany
    {
        return $this->belongsToMany(Pet::class);
    }
}
