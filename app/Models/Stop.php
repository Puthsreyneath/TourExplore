<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Transport;
class Stop extends Model{
    protected $table='stop';
    protected $fillable = ['name','transport_id'];


    public function transport(){
        return $this->belongsTo(Stop::class);
    }

}


?>