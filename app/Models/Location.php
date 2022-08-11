<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Hotels;
use App\Models\places;
class Location extends Model{
    
    protected $fillable = ['id','province','name_code'];

    public function hotels(){
        return $this->hasMany(Hotels::class,'location_id','id','province');
    }
    public function places(){
        return $this->hasMany(Hotels::class,'location_id','id','province');
    }
}



?>