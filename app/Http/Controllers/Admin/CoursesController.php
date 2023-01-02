<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Courses;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function allData()
    {
        return Courses::all();
    }

    public function homePageData()
    {
        return Courses::limit(4)->get();
    }
}
