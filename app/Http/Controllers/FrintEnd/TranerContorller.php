<?php

namespace App\Http\Controllers\FrintEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\TrainerModel;
use Illuminate\Http\Request;

class TranerContorller extends Controller
{
    public function TranerFunction(){
        $result=TrainerModel::all();
        return view('Fronts/Trainers',compact('result'));
    }
}
