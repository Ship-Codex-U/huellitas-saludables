<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ConsultationHistory extends Model
{
    use HasFactory;

    public function pet() : BelongsTo
    {
        return $this->belongsTo(Pet::class);
    }

    public function appointment() : BelongsTo
    {
        return $this->belongsTo(Appointment::class);
    }

    public function employee() : BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}
