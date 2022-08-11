<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $table = 'places';

    protected $fillable = [
        'name', 'highlight', 'description', 'image', 'category', 'rate', 'location_id'
    ];

    public function location(){
        return $this->belongsTo(Location::class);
    }
}
