<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\AboutModel;
use Illuminate\Http\Request;

class AboutController extends Controller
{

    public function About_Form(){
        return view('BackEnd.About.form');
    }


    public function About_List(){
        $result=AboutModel::all();
        return view('BackEnd.About.List',compact('result'));
    }

    
        public function Force_List(){
            $result=AboutModel::onlyTrashed()->get();
            return view('BackEnd.About.ForceDelete',compact('result'));
        }



    public function About_Function(Request $request){
        $request->validate([
            'Photo'=>'required|nullable|mimes:jpeg,jpg,png,gif|max:700|min:50',
            'Title'=>'required',
            'About'=>'required',
            'List'=>'required',
            'Descreptions'=>'required',
        ]);
        if($request->hasFile('Photo')){
            $photos=$request->file('Photo');    
            $photoname=rand(100000,999999999).'.'.$photos->getClientOriginalExtension();
            $photos->move(public_path('image'),$photoname);
        }
        
        $result=new AboutModel;
        $result->Photo=$photoname;
        $result->Title=$request->get('Title');
        $result->About=$request->get('About');
        $result->List=$request->get('List');
        $result->Descreptions=$request->get('Descreptions');
        $result->save();
        return redirect()->route('About/List')->withSuccess('Your Details Hes Been Successfully Added..');
    }   


    public function About_Edit($id){
        $result=AboutModel::where('id',$id)->first();
        return view('BackEnd/About/Edit',compact('result'));
    }


    public function About_Update(Request $request, $id){
        $request->validate([
            'Photo'=>'nullable|mimes:jpeg,jpg,png,gif|max:700|min:50',
            'Title'=>'required',
            'About'=>'required',
            'List'=>'required',
            'Descreptions'=>'required',
        ]);
        $photoname='';
        if($photoname==''){
            $photoname=$request->get('hidden_photo');
        }
        if($request->hasFile('Photo')){
            $photos=$request->file('Photo');    
            $photoname=rand(100000,999999999).'.'.$photos->getClientOriginalExtension();
            $photos->move(public_path('image'),$photoname);
        }
        
        AboutModel::where('id',$id)->update([
            'Photo'=>$photoname,
            'Title'=>$request->get('Title'),
            'About'=>$request->get('About'),
            'List'=>$request->get('List'),
            'Descreptions'=>$request->get('Descreptions'),
        ]);
        return redirect()->route('About/List')->withSuccess('Your Details Hes Been Successfully Updated..');
    }

    public function Force_Delete($id){
        AboutModel::where('id',$id)->forceDelete();
        return redirect()->route('Force/list')->withSuccess('Your Details Hes Been Successfully Force Deleted..');
    }

    public function About_Delete($id){
            $result=AboutModel::where('id',$id)->first();
            $result->delete();
            return redirect()->route('About/List')->withSuccess('Your Details Hes Been Successfully Send To Force List..');
    }

    
    public function Restore_Force_Data($id){
        AboutModel::where('id',$id)->restore();
        return redirect()->route('Force/list')->withSuccess('Your Details Hes Been Successfully Restored..');
    }
   
}



