<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metric extends Model
{
    use HasFactory;
    protected $gaurded = [];

    protected $fillable = ['username', 'repo_name', 'commit_frequency', 'created_at', 'updated_at'];
    protected $table = 'developer_metrics';
}
