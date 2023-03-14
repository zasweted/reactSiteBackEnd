<?php

use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TechChartController;
use Illuminate\Support\Facades\Route;


//techchart routes
Route::get('/chartData', [TechChartController::class, 'allData']);

//clientreview routes
Route::get('/clientReviewData', [ClientReviewController::class, 'allData']);

//contact form routes
Route::post('/contactStore', [ContactController::class, 'store']);

// my courses routes
Route::get('/coursesDataAll', [CoursesController::class, 'allData']);
Route::get('/coursesHomePageData', [CoursesController::class, 'homePageData']);
Route::post('/coursesDetails', [CoursesController::class, 'details']);

//footer routes
Route::get('/footerData', [FooterController::class, 'allData']);

//information routes
Route::get('/informationData', [InformationController::class, 'allData']);

//services routes
Route::get('/servicesData', [ServiceController::class, 'allData']);

//projects routes
Route::get('/projectsDataAll', [ProjectController::class, 'allData']);
Route::get('/projectsHomePageData', [ProjectController::class, 'homePageData']);
Route::post('/projectsDetails', [ProjectController::class, 'details']);

//home page routes
Route::get('/home/videoData', [HomePageController::class, 'homePageVideo']);
Route::get('/home/totalStats', [HomePageController::class, 'homePageTotalStats']);
Route::get('/home/pageTitle', [HomePageController::class, 'homePageTitle']);
Route::get('/home/techDescription', [HomePageController::class, 'homePageTechDescription']);