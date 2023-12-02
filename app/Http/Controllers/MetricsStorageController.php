<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\DatabaseMetricsService;

class MetricsStorageController extends Controller
{
    protected $databaseMetricsService;

    public function __construct(DatabaseMetricsService $databaseMetricsService)
    {
        $this->databaseMetricsService = $databaseMetricsService;
    }

    public function storeCommits(Request $request)
    {
        return $this->databaseMetricsService->storeCommits($request->all());
    }

    public function storePullRequests(Request $request)
    {
        return $this->databaseMetricsService->storePullRequests($request->all());
    }

    public function storeIssuesResolved(Request $request)
    {
        return $this->databaseMetricsService->storeIssuesResolved($request->all());
    }

    public function storeCommitFrequency(Request $request)
    {
        return $this->databaseMetricsService->storeCommitFrequency();
    }

    public function storeCodeReviewInvolvement(Request $request)
    {
        return $this->databaseMetricsService->storeCodeReviewInvolvement($request->all());
    }

    public function storeIssueResolutionTime(Request $request)
    {
        return $this->databaseMetricsService->storeIssueResolutionTime($request->all());
    }

    public function storeCodeChurn(Request $request)
    {
        return $this->databaseMetricsService->storeCodeChurn($request->all());
    }
}
