<?php
<<<<<<< HEAD
=======

>>>>>>> 26cab8822e1abedf99df86d836d2024e05eec581
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Hotels;
<<<<<<< HEAD
use App\Models\places;
=======
use App\Models\Places;
>>>>>>> 26cab8822e1abedf99df86d836d2024e05eec581
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