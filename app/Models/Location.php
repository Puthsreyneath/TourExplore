<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;

    protected $table = 'locations';

    protected $fillable = [
        'province', 'name_code'
    ];

    public function places(){
        return $this->hasMany(Place::class,'location_id','id');
    }
}