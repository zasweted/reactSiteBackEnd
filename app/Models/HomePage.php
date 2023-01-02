<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
    use HasFactory;
    protected $fillable = [
        'home_title',
        'home_subtitle',
        'tech_description',
        'total_student',
        'total_course',
        'total_review',
        'video_description',
        'video_url'
    ];
}
