<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use App\Models\Metric;

class DatabaseMetricsService
{
    public function storeCommitFrequency()
    {
        // Logic to store commit frequency data into the database
        $data = Http::get('http://127.0.0.1:8000/api/metrics/VirajeeAmarasinghe/drupal-project/commit-frequency')->json();
        foreach($data as &$element){
            $element['created_at'] = now();
            $element['updated_at'] = now();
        }
        $output = Metric::insert($data);

        if($output == 1){
            return ['message' => 'stored successfully'];
        }

        return ['message' => 'storing failed.'];
    }

    public function storeCodeReviewInvolvement($data)
    {
        // Logic to store code review involvement data into the database
    }

    public function storeIssueResolutionTime($data)
    {
        // Logic to store issue resolution time data into the database
    }

    public function storeCodeChurn($data)
    {
        // Logic to store code churn data into the database
    }
}
