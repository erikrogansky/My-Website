<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorsInformation extends Model
{
    protected $fillable = [
        'session_id',
        'ip_address',
        'user_agent',
        'device_information',
        'geolocation',
    ];
}
