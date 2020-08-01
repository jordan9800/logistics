<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Vehicle extends Model
{
    protected $fillable = [ 'category_id',
                            'name',
                            'description',
                            'image',
                            'extra_images',
                            'payload',
                            'national_permit' ];

    public function category()
    {
        $this->belongsTo(Category::class);
    }
}
