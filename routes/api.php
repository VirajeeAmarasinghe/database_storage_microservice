<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MetricsStorageController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/store-metrics/{username}/{repoName}/commit-frequency', [MetricsStorageController::class, 'storeCommitFrequency']);
Route::post('/store-metrics/{username}/{repoName}/code-review-involvement', [MetricsStorageController::class, 'storeCodeReviewInvolvement']);
Route::post('/store-metrics/{username}/{repoName}/issue-resolution-time', [MetricsStorageController::class, 'storeIssueResolutionTime']);
Route::post('/store-metrics/{username}/{repoName}/code-churn', [MetricsStorageController::class, 'storeCodeChurn']);
