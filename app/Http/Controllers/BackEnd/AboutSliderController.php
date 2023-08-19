<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutSliderModel;
use Illuminate\Http\Request;

class AboutSliderController extends Controller
{
    public function Slider_Form_Show(){
        return view('BackEnd/About_Slider/Form');
    }

    public function Trash_List_Show(){
        $result=AboutSliderModel::onlyTrashed()->get();
        return view('BackEnd/About_Slider/Trash_List',compact('result'));
    }

    public function Slider_List_Show(){
        $result=AboutSliderModel::all();
        return view('BackEnd/About_Slider/List',compact('result'));
    }

    public function Slider_Submit_Validation(Request $request){
        $request->validate([
            'Photo'=>'required',
            'Name'=>'required',
            'Position'=>'required',
            'About'=>'required',
        ]);
        $result= new AboutSliderModel;
        if($request->hasFile('Photo')){
            $Photos=$request->file('Photo');
            $Photoname=rand(978596,958731).'.'.$Photos->getClientOriginalExtension();
            $Photos->move(public_path('image'),$Photoname);

        }
        $result->Photo=$Photoname;
        $result->Name=$request->get('Name');
        $result->Position=$request->get('Position');
        $result->About=$request->get('About');
        $result->save();
        return redirect()->route('Abhout/Slider/List')->withSuccess('Your Data Has Been Successfully Submited...');

    }
    public function Slider_Form_Edit($id){
        $result=AboutSliderModel::where('id',$id)->first();
        return view('BackEnd/About_Slider/Edit',compact('result'));
    }

    public function Slider_Update(Request $request,$id){
        $request->validate([
            'Name'=>'required',
            'Position'=>'required',
            'About'=>'required',
        ]);

        $Photoname='';
        if($Photoname==''){
            $Photoname=$request->get('hiddenfile');
        }

        if($request->hasFile('Photo')){
            $Photos=$request->file('Photo');
            $Photoname=rand(978596,958731).'.'.$Photos->getClientOriginalExtension();
            $Photos->move(public_path('image'),$Photoname);
            
        }
        AboutSliderModel::where('id',$id)->update([
            'Photo'=>$Photoname,
            'Name'=>$request->get('Name'),
            'Position'=>$request->get('Position'),
            'About'=>$request->get('About'),

        ]);
        return redirect()->route('Abhout/Slider/List')->withSuccess('Your Data Has Been Successfully Updated...');

    }


    public function Force_Delete_Slider($id){
        AboutSliderModel::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->route('Abhout/Slider/List')->withSuccess('Your Data Has Been Successfully Deleted...');
    }


    public function Delete_Slider($id){
        AboutSliderModel::where('id',$id)->first()->delete();
        return redirect()->route('Abhout/Slider/List')->withSuccess('Your Data Has Been Successfully Deleted...');
    }


    public function Force_Restore_Slider($id){
        AboutSliderModel::withTrashed()->where('id',$id)->restore();
        return redirect()->back();
    }
}
