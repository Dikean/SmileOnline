<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'scheduled_date',
        'scheduled_time',
        'type',
        'description',
        'doctor_id',
        'patient_id',
        'specialty_id'
    ];

    public function specialty(){
        return $this->BelongsTo(Specialty::class);
    }

    public function doctor(){
        return $this->BelongsTo(User::class);
    }

    public function patient(){
        return $this->BelongsTo(User::class);
    }

    public function getScheduledTime12Attribute(){
        return (new Carbon($this->scheduled_time))
        ->format('g:i A');
    }

    public function cancellation(){
        return $this->hasOne(CancelledAppointment::class);
    }
}
