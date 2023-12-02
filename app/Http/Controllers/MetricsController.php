<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metric;

class MetricsController extends Controller
{
    public function store(Request $request){
        return Metric::create([
            'title' => '',
            'description' => ''
        ]);
    }

    public function index(){
        return Metric::all();
    }
    
}
