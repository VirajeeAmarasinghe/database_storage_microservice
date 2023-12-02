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

Route::post('posts', [\App\Http\Controller\MetricsController::class, 'store']);
Route::get('posts', [\App\Http\Controller\MetricsController::class, 'index']);

Route::post('/metrics/commits', [MetricsStorageController::class, 'storeCommits']);
Route::post('/metrics/pull-requests', [MetricsStorageController::class, 'storePullRequests']);
Route::post('/metrics/issues-resolved', [MetricsStorageController::class, 'storeIssuesResolved']);
Route::post('/store-metrics/commit-frequency', [MetricsStorageController::class, 'storeCommitFrequency']);
Route::post('/store-metrics/code-review-involvement', [MetricsStorageController::class, 'storeCodeReviewInvolvement']);
Route::post('/store-metrics/issue-resolution-time', [MetricsStorageController::class, 'storeIssueResolutionTime']);
Route::post('/store-metrics/code-churn', [MetricsStorageController::class, 'storeCodeChurn']);
