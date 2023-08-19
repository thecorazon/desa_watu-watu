<?php

namespace App\Http\Controllers\FrintEnd;

use App\Http\Controllers\Controller;
use App\Models\Front\ContactModel;
use App\Models\BackEnd\User\userTable;
use Illuminate\Http\Request;

class ContactController extends Controller
{

   
    public function ContactPage(){
        return view('Fronts/Contact');
    }
    public function Contact_validation(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required',
            'gender'=>'required',
            'password'=>'required',
            'Subject'=>'required',
            'Message'=>'required',
            'photo'=>'required',
        ]);
        
        if($request->hasFile('photo')){ 
            $photos=$request->file('photo');
            $photoname=rand(4646,958796).'.'.$photos->getClientOriginalExtension();
            $photos->move(public_path('image'),$photoname);
        }
        
        $result=new userTable;
        $result->name=$request->get('name');
        $result->email=$request->get('email');
        $result->gender=$request->get('gender');
        $result->password=$request->get('password');
        $result->Subject=$request->get('Subject');
        $result->Message=$request->get('Message');
        $result->photo=$photoname;
        $result->save();
        return redirect('Contact');
    }
}
