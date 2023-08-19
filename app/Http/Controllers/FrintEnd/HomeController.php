<?php

namespace App\Http\Controllers\FrintEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\banner\banner;
use App\Models\BackEnd\Cms\cmsModel;
use App\Models\BackEnd\User\userTable;
use App\Models\BackEnd\CoursesModel;

class HomeController extends Controller
{
    public function Home(){
        return view('Fronts/include/index');

    }
    public function Cms_Function(){
        $result= cmsModel::all();
        return view('Fronts/include/Header',compact('result'));
    }
 
}
