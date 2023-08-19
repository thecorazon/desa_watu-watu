<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\TrainerModel;

class TranerController extends Controller
{
    
    public function Trainer_Form(){
      return  view('BackEnd/Trainers/Form');
    }
    public function Trainer_List(){
        $result= TrainerModel::all();
      return  view('BackEnd/Trainers/List',compact('result'));
    }

    public function Trainer_validation_submit(Request $request){
       $request->validate([
        'Photo'=>'required|mimes:jpeg,jpg,png,gif|max:700|min:20',
        'Name'=>'required',
        'Posiction'=>'required',
        'About'=>'required',
       ]);

       if($request->hasFile('Photo')){
           $photos=$request->file('Photo');
           $phtoName=rand(10000000,90000000).'.'.$photos->getClientOriginalExtension();
           $photos->move(public_path('image'),$phtoName);
        }
        
        $result=new TrainerModel;
       $result->Photo=$phtoName;
       $result->Name=$request->get('Name');
       $result->Posiction=$request->get('Posiction');
       $result->About=$request->get('About');
       $result->save();
       return redirect()->route('Trainer/List');

    }

    public function Trainer_Edit_Function($id){
        $result=TrainerModel::where('id',$id)->first();
        return view('BackEnd/Trainers/Edit',compact('result'));
    }
    public function Update_Form_Data(Request $request,$id){
        $request->validate([
            'Name'=>'required',
            'Posiction'=>'required',
            'About'=>'required',
           ]);
           $phtoName='';
           if($phtoName==''){
            $phtoName=$request->get('hidden_Photo');
           }
    
           if($request->hasFile('Photo')){
               $photos=$request->file('Photo');
               $phtoName=rand(10000000,90000000).'.'.$photos->getClientOriginalExtension();
               $photos->move(public_path('image'),$phtoName);
            }
            
            TrainerModel::where('id',$id)->update([
                'Photo'=>$phtoName,
                'Name'=>$request->get('Name'),
                'Posiction'=>$request->get('Posiction'),
                'About'=>$request->get('About'),
            ]);
        
           return redirect()->route('Trainer/List');
    
    }


    public function Trainer_Delete_Function($id){
        $result=TrainerModel::where('id',$id)->first();
        $result->delete();
        return redirect()->route('Trainer/List')->withSuccess('Deleted Successfully...');
    }
}
