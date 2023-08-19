@extends('layouts.app')

@section('meta-description', 'Struktur Organisasi Desa Watu-Watu')

@section('meta-keywords', 'Struktur Organisasi, Watu-Watu, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Watu-Watu | Struktur Organisasi')

@section('content')

<h4 class="fw-bold">STRUKTUR ORGANISASI PEMERINTAHAN DESA Watu-Watu</h4>

@if(isset($dataStrukturOrganisasi))
    <div class="text-center mt-4">
        <img src="{{ asset('img-struktur-organisasi/' . $dataStrukturOrganisasi->img_struktur_organisasi) }}" alt="" width="100%">
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif



@endsection

