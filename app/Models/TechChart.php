<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TechChart extends Model
{
    use HasFactory;
    protected $fillable = [
        'x_data',
        'y_data'
    ];
}
