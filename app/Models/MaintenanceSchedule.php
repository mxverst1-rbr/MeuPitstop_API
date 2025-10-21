<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MaintenanceSchedule extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'mechanic_shop_id',
        'vehicle_model',
        'vehicle_plate',
        'service_type',
        'scheduled_date',
        'notes',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function mechanicShop()
    {
        return $this->belongsTo(MechanicShop::class);
    }
}
