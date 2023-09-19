<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreKontakRequest;
use App\Http\Requests\UpdateKontakRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Kontak::first();
        return view('pages.admin.kontak')->with([
            'dataKontak' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreKontakRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Kontak $kontak)
    {
        $data = $kontak->first();

        return view('pages.user.kontak')->with([
            'dataKontak' => $data
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        Kontak::updateOrCreate(
            ["id" => $request->id],
            [
                "alamat" => $request->alamat,
                "no_telp" => $request->no_telp,
                "email" => $request->email
            ]
        );
        Session::flash('success');

        return redirect()->back();
    }

}
