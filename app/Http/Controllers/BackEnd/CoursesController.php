<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\CoursesModel;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function Courses_List()              /// ***** listing show Function
    {
        $result=CoursesModel::all();
        return view('BackEnd/Courses/List',compact('result'));
    }
    
    public function Courses_Form()          // ****** Form show Function
    {
        return view('BackEnd/Courses/Form');
    }

    public function Courses_Submit_function(Request $request)     // Form Listing And submit Function
    {

        $request->validate([
            'Photo' => 'required|mimes:jpeg,jpg,png,gif|max:700|min:20',
            'Title' => 'required',
            'Descreptions' => 'required',
            'Sulg' => 'required',
        ]);
        $result = new CoursesModel();

        $result->Title = $request->get('Title');
        $result->Descreptions = $request->get('Descreptions');
        $result->Sulg = $request->get('Sulg');
        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $Photoname = rand(100000, 900000) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('image'), $Photoname);
        }
        $result->Photo = $Photoname;
        $result->save();
        return redirect('/Courses/List');
    }
    

public function Edit_Function($id){
    $result=CoursesModel::where('id',$id)->first();
    return view('BackEnd/Courses/Edit',compact('result'));
}

public function Update_Function( Request $request,$id){
    $request->validate([
        'Title' => 'required',
        'Descreptions' => 'required',
        'Sulg' => 'required',
    ]); 

    if ($request->hasFile('Photo')) {
        $photos = $request->file('Photo');
        $Photoname = rand(100000, 900000) . '.' . $photos->getClientOriginalExtension();
        $photos->move(public_path('image'), $Photoname);
    }
    $Photoname='';
    if($Photoname==''){
        $Photoname=$request->get('exist_photo');
    }
     CoursesModel::where('id',$id)->update([
        'Title'=>$request->get('Title'),
        'Descreptions' => $request->get('Descreptions'),
        'Sulg' => $request->get('Sulg'),
        'Photo'=>$Photoname
    ]);
    return redirect('/Courses/List');
}

    public function Delete_Function($id){
        $delete=CoursesModel::where('id',$id)->first();
        $delete->delete();
        return redirect('/Courses/List')->withSuccess('Successfully Deleted..');
    }
}
