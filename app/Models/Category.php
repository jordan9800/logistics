<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Vehicle;

class Category extends Model
{
    protected $fillable = ['name'];

    public function vehicles()
    {
        $this->hasMany(Vehicle::class);
    }
}
