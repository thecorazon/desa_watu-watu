<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\Banner\banner;
use Illuminate\Auth\Events\Validated;

class BannerController extends Controller
{
    public function BannerForm(){
        return view('BackEnd/Banner/BannerForm');
    }   
    
    public function BannerList(){
        $result= banner::all(); 
        return view('BackEnd/Banner/BannerList',compact('result'));
    }

    public function AddData(Request $request){
        $request->validate([
            'Titel'=>'required',
            'Photo'=>'required',
        ]);
        
            if($request->hasFile('Photo')){
                $results=$request->file('Photo');
                $photoname= rand(100000,9999999).'.'.$results->getClientOriginalExtension();
                $results->move(public_path('BannerPics'),$photoname);

            }
            $result=new banner();

            $result->Titel=$request->get('Titel');
            $result->Photo=$photoname;
            $result->save();
            return redirect('Listlink')->withSuccess('successfully update data.');
    }

    public function editData($id){
        $editview= banner::find($id);
        return view('BackEnd/Banner/BannerEdit',compact('editview'));

    }
    public function updateData(Request $request, $id){
        $request->validate([
            'Titel'=>'required',
            // 'Photo'=>'required',
        ]);
        $photoname='';
        if($photoname==''){
            $photoname=$request->get('exist_photo');
            
        }
            if($request->hasFile('Photo')){
                $results=$request->file('Photo');
                $photoname= rand(100000,9999999).'.'.$results->getClientOriginalExtension();
                $results->move(public_path('BannerPics'),$photoname);
                
            }
          
            banner::where('id',$id)->update([
                'Titel'=>$request->get('Titel'),
                'Photo'=>$photoname
            ]);
               
           
            return redirect('Listlink')->withSuccess('successfully update data.');
    }

    public function deletedd($id){
        $result=banner::where('id',$id)->first();
        $result->delete();
        return redirect('Listlink')->withSuccess('successfully Deleted data.');
    }
}
