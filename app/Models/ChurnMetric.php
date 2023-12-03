<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChurnMetric extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'repo_name', 'churn', 'created_at', 'updated_at'];
    protected $table = 'churn_metrics';
}
