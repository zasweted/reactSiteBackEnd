<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TechChart;
use Illuminate\Http\Request;

class TechChartController extends Controller
{
    public function allData()
    {
        return  TechChart::all();
           
    }
}
