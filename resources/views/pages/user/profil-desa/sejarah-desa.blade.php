@extends('layouts.app')

@section('meta-description', 'Sejarah Desa Watu-Watu')

@section('meta-keywords', 'Sejarah, Watu-Watu, Desa, Talun, Pekalongan, Kabupaten Pekalongan, Kecamatan Talun')

@section('title', 'Desa Watu-Watu | Sejarah Desa')

@section('content')

<h4 class="fw-bold">SEJARAH DESA Watu-Watu</h4>

@if(isset($dataSejarahDesa))
    <img src="{{ asset('img-sejarah-desa/'.$dataSejarahDesa->img_sejarah) }}" alt="" width="100%">
    <div class="deskripsi-desa mt-2">
        {!! $dataSejarahDesa->deskripsi_sejarah !!}
    </div>
@else
    <div style="margin-bottom: 100vh"></div>
@endif

@endsection