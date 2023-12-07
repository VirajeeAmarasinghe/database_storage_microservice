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

Route::get('/store-metrics/{username}/{repoName}/commit-frequency', 
[MetricsStorageController::class, 'storeCommitFrequency'])
->name('store-commit-frequency');
Route::get('/store-metrics/{username}/{repoName}/code-review-involvement', 
[MetricsStorageController::class, 'storeCodeReviewInvolvement'])
->name('store-code-review-involvement');
Route::get('/store-metrics/{username}/{repoName}/issue-resolution-time', 
[MetricsStorageController::class, 'storeIssueResolutionTime'])
->name('store-issue-resolution-time');
Route::get('/store-metrics/{username}/{repoName}/code-churn', 
[MetricsStorageController::class, 'storeCodeChurn'])
->name('store-code-churn');

Route::get('/', [MetricsStorageController::class, 'index']);