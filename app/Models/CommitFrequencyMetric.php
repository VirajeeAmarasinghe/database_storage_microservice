<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommitFrequencyMetric extends Model
{
    use HasFactory;
    protected $gaurded = [];

    protected $fillable = ['username', 'repo_name', 'commit_frequency', 'created_at', 'updated_at'];
    protected $table = 'commit_frequency_metrics';
}
