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

    public function storeCommitFrequency($username, $repoName)
    {
        return $this->databaseMetricsService->storeCommitFrequency($username, $repoName);
    }

    public function storeCodeReviewInvolvement($username, $repoName)
    {
        return $this->databaseMetricsService->storeCodeReviewInvolvement($username, $repoName);
    }

    public function storeIssueResolutionTime($username, $repoName)
    {
        return $this->databaseMetricsService->storeIssueResolutionTime($username, $repoName);
    }

    public function storeCodeChurn($username, $repoName)
    {
        return $this->databaseMetricsService->storeCodeChurn($username, $repoName);
    }
}
