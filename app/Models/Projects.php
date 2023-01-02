<?php

namespace App\Models;
 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;

    protected $fillable = [
        'project_image_one',
        'project_image_two',
        'project_name',
        'project_description',
        'project_features',
        'project_live_preview'
    ];
}
