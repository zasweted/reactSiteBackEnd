<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\HomePage;
use Illuminate\Http\Request;

class HomePageController extends Controller
{
    public function homePageVideo()
    {
        return HomePage::select('video_description', 'video_url')->get();
    }
    public function homePageTotalStats()
    {
        return HomePage::select('total_student', 'total_course', 'total_review')->get();
    }
    public function homePageTitle()
    {
        return HomePage::select('home_title', 'home_subtitle')->get();
    }
    public function homePageTechDescription()
    {
        return HomePage::select('tech_description')->get();
    }
}
