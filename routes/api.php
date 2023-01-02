<?php

use App\Http\Controllers\Admin\ClientReviewController;
use App\Http\Controllers\Admin\ContactController;
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