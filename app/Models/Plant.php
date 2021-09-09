<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    use HasFactory;
    public function plantUniquePlant()
    {
        return $this->hasMany('App\Models\UniquePlant', 'plant_id', 'id');
    }
}
