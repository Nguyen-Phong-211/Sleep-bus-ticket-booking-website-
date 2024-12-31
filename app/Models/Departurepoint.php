<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Departurepoint extends Model
{
    //
    protected $fillable = [
        'departurepoint_id',
        'departurepoint_name',
        'description',
        'status',
        'detail_address',
        'one_way',
        'transshipment',
    ];
    protected $primaryKey = 'departurepoint_id';
    public function arrivalPoints()
    {
        return $this->belongsToMany(Arrivalpoint::class, 'routes', 'departurepoint_id', 'arrivalpoint_id');
    }
}
