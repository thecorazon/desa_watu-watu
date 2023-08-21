<?php

namespace App\Http\Controllers;

use App\Models\DataPendudukPerUsia;
use App\Http\Requests\StoreDataPendudukPerUsiaRequest;
use App\Http\Requests\UpdateDataPendudukPerUsiaRequest;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class DataPendudukPerUsiaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DataPendudukPerUsia::all();

        return view('pages.admin.data-penduduk-per-usia')->with([
            'dataPendudukPerUsia' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.admin.data-penduduk-per-usia.tambah-data-penduduk-per-usia');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDataPendudukPerUsiaRequest $request)
    {

        $validator = Validator::make($request->all(), [

            'tahun' => 'required',
            'u0_5' => 'required',
            'u6_9' => 'required',
            'u10_16' => 'required',
            'u17_25' => 'required',
            'u26_30' => 'required',
            'u31_35' => 'required',
            'u36_40' => 'required',
            'u41_45' => 'required',
            'u46_50' => 'required',
            'u51_keatas' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $dataPendudukPerUsia = new DataPendudukPerUsia();
    
        $dataPendudukPerUsia->tahun = $request->tahun;
        $dataPendudukPerUsia->u0_5 = $request->u0_5;
        $dataPendudukPerUsia->u6_9 = $request->u6_9;
        $dataPendudukPerUsia->u10_16 = $request->u10_16;
        $dataPendudukPerUsia->u17_25 = $request->u17_25;
        $dataPendudukPerUsia->u26_30 = $request->u26_30;
        $dataPendudukPerUsia->u31_35 = $request->u31_35;
        $dataPendudukPerUsia->u36_40 = $request->u36_40;
        $dataPendudukPerUsia->u41_45 = $request->u41_45;
        $dataPendudukPerUsia->u46_50 = $request->u46_50;
        $dataPendudukPerUsia->u51_keatas = $request->u51_keatas;

        $dataPendudukPerUsia->save();

        Session::flash('success');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(DataPendudukPerUsia $dataPendudukPerUsia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $data = DataPendudukPerUsia::findOrFail($id);

        return view('pages.admin.data-penduduk-per-usia.edit-data-penduduk-per-usia')->with([
            'dataPenduduk' => $data
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDataPendudukPerUsiaRequest $request, $id)
    {
        $dataPendudukPerUsia = DataPendudukPerUsia::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'tahun' => 'required',
            'u0_5' => 'required',
            'u6_9' => 'required',
            'u10_16' => 'required',
            'u17_25' => 'required',
            'u26_30' => 'required',
            'u31_35' => 'required',
            'u36_40' => 'required',
            'u41_45' => 'required',
            'u46_50' => 'required',
            'u51_keatas' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }

        $dataPendudukPerUsia->tahun = $request->tahun;
        $dataPendudukPerUsia->u0_5 = $request->u0_5;
        $dataPendudukPerUsia->u6_9 = $request->u6_9;
        $dataPendudukPerUsia->u10_16 = $request->u10_16;
        $dataPendudukPerUsia->u17_25 = $request->u17_25;
        $dataPendudukPerUsia->u26_30 = $request->u26_30;
        $dataPendudukPerUsia->u31_35 = $request->u31_35;
        $dataPendudukPerUsia->u36_40 = $request->u36_40;
        $dataPendudukPerUsia->u41_45 = $request->u41_45;
        $dataPendudukPerUsia->u46_50 = $request->u46_50;
        $dataPendudukPerUsia->u51_keatas = $request->u51_keatas;

        $dataPendudukPerUsia->save();

        Session::flash('success');

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $dataPendudukPerUsia = DataPendudukPerUsia::findOrFail($id);
        $dataPendudukPerUsia->delete();
        
        Session::flash('success');

        return redirect()->back();
    }
}
