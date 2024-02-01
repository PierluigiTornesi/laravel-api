<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
        
        //prendo tutti i project dal db
        $projects = Project::all();

        return response()->json([
            'results' => $projects,
            'success' => 'true'
        ]);
    }
}
