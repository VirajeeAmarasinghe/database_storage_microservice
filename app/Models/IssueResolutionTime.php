<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IssueResolutionTime extends Model
{
    use HasFactory;

    protected $fillable = ['username', 'repo_name', 'average', 'created_at', 'updated_at'];
    protected $table = 'issue_resolution_metrics';
}
