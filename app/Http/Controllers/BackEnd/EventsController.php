<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use App\Models\BackEnd\EventsModels;
use Illuminate\Http\Request;

class EventsController extends Controller
{
    public function Events_Form()
    {
        return view('BackEnd/Events/Form');
    }
    public function Events_List()
    {
        $result = EventsModels::all();
        return view('BackEnd/Events/List', compact('result'));
    }
    public function Events_Trash()
    {
        $result = EventsModels::onlyTrashed()->get();
        return view('BackEnd/Events/Trash', compact('result'));
    }
   
    
    public function Events_Validation_Function(Request $request)
    {
        $request->validate([
            'Photo' => 'required',
            'Name' => 'required',
            'Posiction' => 'required',
            'About' => 'required',
        ]);

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $phtoName = rand(10000000, 90000000) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('image'), $phtoName);
        }

        $result = new EventsModels;
        $result->Photo = $phtoName;
        $result->Name = $request->get('Name');
        $result->Posiction = $request->get('Posiction');
        $result->About = $request->get('About');
        $result->save();
        return redirect()->route('Event/List');
    }

    public function Events_Edit_Function($id)
    {
        $result = EventsModels::where('id', $id)->first();
        return view('BackEnd/Events/Edit', compact('result'));
    }

    public function Events_Update_Function(Request $request, $id)
    {
        $request->validate([
            'Photo' => 'nullable|mimes:jpeg,jpg,png,gif|max:700|min:20',
            'Name' => 'required',
            'Posiction' => 'required',
            'About' => 'required',
        ]);
        $photos='';
        if($photos==''){
            $photos=$request->get('hidden_file');
        }

        if ($request->hasFile('Photo')) {
            $photos = $request->file('Photo');
            $phtoName = rand(10000000, 90000000) . '.' . $photos->getClientOriginalExtension();
            $photos->move(public_path('image'), $phtoName);
        }

        EventsModels::where('id', $id)->update([
            'Name' => $request->get('Name'),
            'Posiction' => $request->get('Posiction'),
            'About' => $request->get('About'),
            'Photo'=>$phtoName
        ]);
        return redirect()->route('Event/List');
    }
    public function Events_delete($id){
        $result=EventsModels::where('id',$id)->first();
        $result->delete();
        return redirect()->route('Event/List');
    }

    public function forceDelete($id){
        EventsModels::withTrashed()->where('id',$id)->forceDelete();
        return redirect()->back();
    }
    public function Events_Restore($id){
        EventsModels::withTrashed()->where('id',$id)->restore();
        return redirect()->route('Event/List');
    }
}
