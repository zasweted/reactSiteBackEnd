<?php

use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CoursesController;
use App\Http\Controllers\Admin\FooterController;
use App\Http\Controllers\Admin\InformationController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TechChartController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
//techchart routes
Route::get('/chartData', [TechChartController::class, 'allData']);

//clientreview routes
Route::get('/clientReviewData', [ClientReviewController::class, 'allData']);

//contact form routes
Route::post('contactStore', [ContactController::class, 'store']);

// my courses routes
Route::get('/coursesDataAll', [CoursesController::class, 'allData']);
Route::get('/coursesHomePageData', [CoursesController::class, 'homePageData']);
Route::post('/courseDetails', [CoursesController::class, 'details']);

//footer routes
Route::get('/footerData', [FooterController::class, 'allData']);

//information routes
Route::get('/informationData', [InformationController::class, 'allData']);

//services routes
Route::get('/servicesData', [ServiceController::class, 'allData']);

//projects routes
Route::get('/projectsDataAll', [ProjectController::class, 'allData']);
Route::get('/projectsHomePageData', [ProjectController::class, 'homePageData']);