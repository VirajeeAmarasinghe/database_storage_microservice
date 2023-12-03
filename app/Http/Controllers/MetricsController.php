<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CommitFrequencyMetric;

class MetricsController extends Controller
{
    public function store(Request $request){
        return CommitFrequencyMetric::create([
            'title' => '',
            'description' => ''
        ]);
    }

    public function index(){
        return CommitFrequencyMetric::all();
    }
    
}
