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
            'success' => true
        ]);
    }

    public function show($slug){
        //prendo il singolo project
         $project = Project::with('type','technologies')->where('slug', $slug)->first();

         if($project){
            return response()->json([
                'result' => $project,
                'success' => true
             ]);
         }else{
            return response()->json([
                'message' => 'No project available',
                'success' => false
             ]);
         }
    }
}
