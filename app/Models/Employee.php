<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\EmployeeAddress;
use App\Models\EmployeeType;
use App\Models\EmployeeProfile;

class Employee extends Model
{
    protected $fillable = [ 'name',
                            'phone',
                            'alternate_phone',
                            'employee_type_id',
                            'status' ];
    
    public function employee_type()
    {
        $this->belongsTo(EmployeeType::class);
    }

    public function employee_addresses()
    {
        $this->hasMany(EmployeeAddress::class);
    }

    public function employee_profile()
    {
        $this->hasOne(EmployeeProfile::class);
    }
}
