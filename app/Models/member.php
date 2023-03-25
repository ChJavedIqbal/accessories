<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    use HasFactory;
    function getNameAttribute($value)
    {
        return ucfirst($value);
    }
    function getAddressAttribute($value)
    {
        return $value.",india";
    }
}
