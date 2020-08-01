<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\City;
use App\Models\Employee;

class EmployeeAddress extends Model
{
    protected $fillable = [ 'employee_id', 
                            'line_one',
                            'line_two',
                            'landmark',
                            'postal_code',
                            'city_id',
                            'type'  ];

    public function employee()
    {
        $this->belongsTo(Employee::class);
    }

    public function city()
    {
        $this->belongsTo(City::class);
    }
}
