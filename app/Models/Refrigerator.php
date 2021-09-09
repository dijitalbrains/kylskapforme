<?php

namespace App\Models;

use App\Casts\UnitValue;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Refrigerator extends Model
{
    protected $casts = ['height' => UnitValue::class];

    public function getDefaultImageAttribute()
    {
        return $this->images->where('type', 'standard')->first()->path;
    }

    public function color()
    {
        return $this->belongsTo(Color::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function images()
    {
        return $this->hasMany(RefrigeratorImage::class);
    }

    public function videos()
    {
        return $this->hasMany(RefrigeratorVideo::class);
    }

    public function stores()
    {
        return $this->belongsToMany(Store::class, 'refrigerators_stores');
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'properties_refrigerators');
    }
}
