<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProjectModel;

class ProjectsController extends Controller
{
    function ProjectsPage(){

        $ProjectData = json_decode(ProjectModel::orderBy('id','desc')->limit(10)->get());

        return view('Projects',['ProjectData'=> $ProjectData]);
    }
}
