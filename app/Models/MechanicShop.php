<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MechanicShop extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'user_id',
        'phone',
        'email',
        'address',
        'city',
        'state',
        'zip_code',
        'registration_number',
        'opening_hours',
        'rating',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function maintenanceSchedules()
    {
        return $this->hasMany(MaintenanceSchedule::class);
    }
}
