<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class personal_infos extends Model{
    protected $table='personal_infos';
    protected $primarykey='id';
    protected $fillable = ['fname',' lname',' email','tel','address'];
}



?>