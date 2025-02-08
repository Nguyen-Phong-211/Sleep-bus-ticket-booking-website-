<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderTicket extends Model
{
    //
    protected $fillable = [
        'route_id',
        'user_id',
        'price',
        'number_of_ticket',
        'dif_cost',
        'total_price',
        'note',
        'vehicle_id',
        'type_time_id',
        'one_way',
        'round_trip',
        'transshipment',
        'image_invoice'
    ];
}
