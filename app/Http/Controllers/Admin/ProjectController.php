<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Projects;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function allData()
    {
        return Projects::all();
    }

    public function HomePageData()
    {
        return Projects::limit(3)->get();
    }

    public function details(Request $request)
    {
        $id = $request->id;
        return Projects::where('id', $id)->get();
    }
}
