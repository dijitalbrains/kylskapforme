<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RefrigeratorImage extends Model
{
    use HasFactory;

    public function getPathAttribute($path)
    {
        return 'https://prisjakt.s3.eu-north-1.amazonaws.com/images/' . $path;
    }
}
