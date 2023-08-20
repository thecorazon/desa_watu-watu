@extends('layouts.app')

@section('meta-description', 'Profil Desa Watu-Watu')

@section('meta-keywords', 'Profil, Watu-Watu, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Watu-Watu | Profile Desa')

@section('content')

<h4 class="fw-bold">PROFIL DESA WATU-WATU</h4>

@if(isset($dataProfilDesa))
    <img src="{{ asset('img-profil-desa/'.$dataProfilDesa->img_desa) }}" alt="" width="100%">
    <div class="deskripsi-desa mt-2">
        {!! $dataProfilDesa->deskripsi !!}
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif



@endsection

