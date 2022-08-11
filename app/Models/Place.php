<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Location;

class Place extends Model{
    protected $fillable = ['name','hightlight','description','image','category','rate','location_id'];


    public function location(){
        return $this->belongsTo(Location::class);
    }

}



?>