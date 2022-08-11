<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Location;
class Hotels extends Model{
    protected $fillable = ['type','price','des','location_id'];


    public function location(){
        return $this->belongsTo(Location::class);
    }

}



?>