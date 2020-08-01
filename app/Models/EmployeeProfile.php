<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Employee;

class EmployeeProfile extends Model
{
    protected $fillable = [ 'employee_id', 
                            'aadhar',
                            'aadhar_images',
                            'pan',
                            'pan_images' ];

    public function employee()
    {
        $this->belongsTo(Employee::class);
    }
}
