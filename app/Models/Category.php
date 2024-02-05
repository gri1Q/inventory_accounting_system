<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    protected function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('H:i:s d.m.Y');
    }

}
