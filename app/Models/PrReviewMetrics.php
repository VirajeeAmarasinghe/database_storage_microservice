<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrReviewMetrics extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'repo_name', 'pr_url', 'review_count', 'created_at', 'updated_at'];
    protected $table = 'pr_review_metrics';
}
