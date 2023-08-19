<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\User\userTable;
use App\Models\Front\ContactModel;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function userlist()      //*******  List Show karne ke liy function *
    {
        $result = userTable::paginate(4);
        return view('BackEnd/User/table', compact('result'));
    }

    public function userform()      //******* Form  Show karne ke liy function *
    {
        return view('BackEnd/User/userform');
    }


    public function formvalidation(Request $request)    /// ********* USER validation and Form submit Function
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user_tables,email',
            'gender' => 'required',
            'password' => 'required',
            'Subject' => 'required',
            'Message' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,png,gif|max:700|min:20',
        ]);
        $res = new userTable();
        if($request->hasFile('photo')){
            $photos=$request->file('phpto');
            $photoName=rand(100000000,8999999555).'.'.$photos->getClientOriginalExtension();
            $photos->move(public_path('image'),$photoName);
        }
        $res->photo=$photoName;
        $res->name = $request->get('name');
        $res->email = $request->get('email');
        $res->gender = $request->get('gender');
        $res->password = $request->get('password');
        $res->Subject = $request->get('Subject');
        $res->Message = $request->get('Message');
        $res->save();
        return redirect('userlist','Contact')->withSuccess('your data has been successfully submitted');
    }



    public function editdata($id)         /// ********* Edit Form par List Show karane ke liy Function
    {
        $result = userTable::where('id', $id)->first();
        return view('BackEnd/User/usereditform', compact('result'));
    }



    public function update(Request $request, $id)       /// ********* Edit Form par validation and Edit Data Function 
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'gender' => 'required',
            'password' => 'required',
            'Subject' => 'required',
            'Message' => 'required',
            'photo' => 'nullable|mimes:jpeg,jpg,png,gif|max:700|min:50',
        ]);
        $photos='';
        if($photos==''){
            $photos=$request->get('hiddenFile');
        }

        if($request->hasFile('photo')){
            $photos=$request->file('photo');
            $photoName=rand(100000000,8999999555).'.'.$photos->getClientOriginalExtension();
            $photos->move(public_path('image'),$photoName);
        }
        userTable::where('id', $id)->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'gender' => $request->get('gender'),
            'password' => $request->get('password'),
            'Subject' => $request->get('Subject'),
            'Message' => $request->get('Message'),
            'photo'=>$photoName,
        ]);
        return redirect('userlist')->withSuccess('your data has been successfully Updated');
    }


    public function deletess($id)         ///************* Delete Function 
    {
        $res = userTable::where('id', $id)->first();
        $res->delete();
        return redirect('userlist')->withSuccess('your data has been successfully Deleted');
    }
}
