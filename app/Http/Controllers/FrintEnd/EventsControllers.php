<?php

namespace App\Http\Controllers\FrintEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\EventsModels;
use Illuminate\Http\Request;

class EventsControllers extends Controller
{
    public function Events_Function(){
        $result=EventsModels::all();
        return view('Fronts/Events',compact('result'));
    }
}
