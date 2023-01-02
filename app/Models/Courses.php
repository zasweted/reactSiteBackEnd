<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;
    protected $fillable = [
        'short_title',
        'short_description',
        'short_image',
        'long_title',
        'long_description',
        'total_lecture',
        'total_duration',
        'total_student',
        'total_category',
        'total_tags',
        'total_instructor',
        'total_price',
        'skill_all',
        'video_url'
    ];
}
