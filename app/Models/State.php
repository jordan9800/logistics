<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;

class State extends Model
{
    protected $fillable = ['name'];

    public function cities()
    {
        $this->hasMany(City::class);
    }
}
