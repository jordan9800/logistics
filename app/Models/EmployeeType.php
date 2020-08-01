<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class EmployeeType extends Model
{
    protected $fillable = ['name'];

    public function employees()
    {
        $this->hasMany(Employee::class);
    }
}
