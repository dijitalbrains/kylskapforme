<?php

namespace App\Models;

use App\Casts\UnitValue;
use App\Constants;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Refrigerator extends Model
{
    use HasFactory;

    protected $casts = [
        'height' => UnitValue::class,
        'width' => UnitValue::class,
        'displayed_volume' => UnitValue::class,
    ];

    public function getDisplayedVolumeAttribute()
    {
        $column = $this->category_id == Constants::FridgeFreezer ? 'fridge_volume' : 'volume';
        return $this->castAttribute('displayed_volume', $this->{$column});
    }

    public function getDefaultImageAttribute()
    {
        return $this->images->where('type', 'standard')->first()->path;
    }

    public function getColorNameAttribute()
    {
        return $this->color->name ?? '-';
    }

    public function getMinPriceAttribute()
    {
        return $this->stores->min('pivot.price');
    }

    public function getIsFavoriteAttribute()
    {
        return $this->hasMany(UserFavoriteRefrigerator::class)->where(['refrigerator_id' => $this->id,'user_id'=> Auth::id()])->exists();
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
        return $this->belongsToMany(Store::class, 'refrigerators_stores')->orderByPivot('price')->withPivot(['name', 'price', 'shipping_price', 'delivery_type', 'stock_status', 'stock_status_text', 'product_url']);
    }

    public function properties()
    {
        return $this->belongsToMany(Property::class, 'properties_refrigerators');
    }
}
