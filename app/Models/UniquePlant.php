<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniquePlant extends Model
{
    use HasFactory;
    public function plantPlant()
    {
        return $this->belongsTo('App\Models\Plant', 'plant_id', 'id');
    }
}
