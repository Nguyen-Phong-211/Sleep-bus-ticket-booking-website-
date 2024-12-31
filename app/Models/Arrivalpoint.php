<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Arrivalpoint extends Model
{
    //
    protected $fillable = [
        'arrivalpoint_name',
        'description',
        'status',
        'detail_address',
        'one_way',
        'transshipment',
    ];
    protected $primaryKey = 'arrivalpoint_id';
    public function departurePoints()
    {
        return $this->belongsToMany(Departurepoint::class, 'routes', 'arrivalpoint_id', 'departurepoint_id');
    }
}
