<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Stop;
class Transport extends Model{
    protected $table='transport';

    protected $fillable = ['id','name'];

    public function stops(){
        return $this->hasMany(Stop::class,'id','name','location_id');
    }
}



?>

