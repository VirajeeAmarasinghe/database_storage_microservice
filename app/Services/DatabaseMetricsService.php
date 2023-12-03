<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\CommitFrequencyMetric;
use App\Models\PrReviewMetrics;
use App\Models\IssueResolutionTime;
use App\Models\ChurnMetric;

class DatabaseMetricsService
{
    public function storeCommitFrequency($username, $repoName)
    {
        // Logic to store commit frequency data into the database
        $rootUrlWithoutPort = '172.25.0.1';
        $data = Http::get("$rootUrlWithoutPort:8000/api/metrics/$username/$repoName/commit-frequency")->json();
        foreach ($data as &$element) {
            $element['created_at'] = now();
            $element['updated_at'] = now();
        }
        $output = CommitFrequencyMetric::insert($data);

        if ($output == 1) {
            return ['message' => 'stored successfully'];
        }

        return ['message' => 'storing failed.'];
    }

    public function storeCodeReviewInvolvement($username, $repoName)
    {
        // Logic to store code review involvement data into the database
        $rootUrlWithoutPort = '172.25.0.1';
        $data = Http::get("$rootUrlWithoutPort:8000/api/metrics/$username/$repoName/code-review-involvement")->json();

        foreach ($data as &$element) {
            $element['created_at'] = now();
            $element['updated_at'] = now();
        }
        $output = PrReviewMetrics::insert($data);

        if ($output == 1) {
            return ['message' => 'stored successfully'];
        }

        return ['message' => 'storing failed.'];
    }

    public function storeIssueResolutionTime($username, $repoName)
    {
        // Logic to store issue resolution time data into the database
        $rootUrlWithoutPort = '172.25.0.1';
        $data = Http::get("$rootUrlWithoutPort:8000/api/metrics/$username/$repoName/issue-resolution-time")->json();
        
        foreach ($data as &$element) {
            $element['created_at'] = now();
            $element['updated_at'] = now();
        }
        $output = IssueResolutionTime::insert($data);

        if ($output == 1) {
            return ['message' => 'stored successfully'];
        }

        return ['message' => 'storing failed.'];
    }

    public function storeCodeChurn($username, $repoName)
    {
        // Logic to store code churn data into the database
        $rootUrlWithoutPort = '172.25.0.1';
        $data = Http::get("$rootUrlWithoutPort:8000/api/metrics/$username/$repoName/code-churn")->json();

        foreach ($data as &$element) {
            $element['created_at'] = now();
            $element['updated_at'] = now();
        }
        $output = ChurnMetric::insert($data);

        if ($output == 1) {
            return ['message' => 'stored successfully'];
        }

        return ['message' => 'storing failed.'];
    }
}
