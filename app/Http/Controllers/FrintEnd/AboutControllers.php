<?php

namespace App\Http\Controllers\FrintEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutModel;
use App\Models\BackEnd\AboutSliderModel;
use Illuminate\Http\Request;

class AboutControllers extends Controller
{
    public function About_Front_Function(){
        $results=AboutModel::all();
        $Sliders=AboutSliderModel::all();
        return view('Fronts/About',compact('results','Sliders'));
    }
}
