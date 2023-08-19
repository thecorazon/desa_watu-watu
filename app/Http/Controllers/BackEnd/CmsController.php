<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BackEnd\Cms\cmsModel;

class CmsController extends Controller
{
    public function cmsform(){         //*******  Form Show karne ke liy function *
        return view('BackEnd/cms/cmsform');
    }

    public function cmsList(){       //*******  List Show karne ke liy function *
        $result= cmsModel::all();
        return view('BackEnd/cms/cmslist',compact('result'));
    }


    public function cmsValidation(Request $request){     /// ********* CMS validation and Form submit Function
        $request->validate([
            'titel'=>'required',
            'description'=>'required',
        ]);
        $result=new cmsModel();
        $result->titel = $request->get('titel');
        $result->description = $request->get('description');
        $result->save();
        return redirect('cmsLitLink')->withSuccess('your data has been successfully submitted');

    }



    public function updateFun($id){        /// ********* Edit Form par List Show karane ke liy Function 
        $result=cmsModel::where('id',$id)->first();
        return view('BackEnd/cms/cmsedit',compact('result'));

    }



    public function editdata(Request $request,$id){    /// ********* Edit Form par validation and Edit Data Function 
        $request->validate([
            'titel'=>'required',
            'description'=>'required',
        ]);
        $result=cmsModel::where('id',$id)->first();
        $result->titel = $request->get('titel');
        $result->description = $request->get('description');
        $result->save();
        return redirect('cmsLitLink')->withSuccess('your data has been successfully Updated');

    }




   public function deleted($id){          ////************* Delete Function 
        $result=cmsModel::where('id',$id)->first();
        $result->delete();
        return redirect('cmsLitLink')->withSuccess('your data has been successfully Deleted');

   }

   public function Status($id){          ////************* status Function 
        $product=cmsModel::select('Status')->where('id',$id)->first();

        if($product->Status=='1'){
            $Status='0';
            
        }
        else{
            $Status='1';
        }
        $product=array('Status'=>$Status);
        cmsModel::where('id',$id)->update($product);
        return redirect('cmsLitLink')->withSuccess('your Status has been successfully Updated...!');
   }
}
