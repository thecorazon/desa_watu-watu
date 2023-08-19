<?php

namespace App\Http\Controllers\FrintEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\CoursesModel;
use Illuminate\Http\Request;

class CoursesControllers extends Controller
{
    public function Courses_Function_Front(){
        $result= CoursesModel::all();
        return view('Fronts/Courses',compact('result'));
    }
}
