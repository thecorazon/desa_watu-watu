@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Tambah Data Penduduk Per Usia</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item" aria-current="page"><a href="{{ route('dataPendudukPerUsiaAdmin') }}">Data Penduduk Per Usia</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Data Penduduk Per Usia</li>
</ol>

<form action="{{ route('tambahDataPendudukPerUsiaAdmin') }}" method="POST" class="my-3">
    @csrf

    @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Tambah data penduduk berhasil!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        @foreach ($errors->all() as $error)
        {{ $error }}
        @endforeach
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <div class="row mt-3">
        <div class="col-md-8">
            <div class="callout callout-info">
                <h4>Info Mengisi Data Penduduk</h4>
                Jumlah penduduk yang dimasukkan adalah per tahun
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <label for="tahun" class="form-label">Tahun</label>
            <input type="text" name="tahun" id="tahun" class="form-control" maxlength="4" minlength="4" required>
        </div>
        <div class="col-md-6">
            <label for="u0_5" class="form-label">Usia 0 - 5</label>
            <input type="number" name="u0_5" id="u0_5" class="form-control" value=0 required>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <label for="u6_9" class="form-label">Usia 6 - 9</label>
            <input type="number" name="u6_9" id="u6_9" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u10_16" class="form-label">Usia 10 - 17</label>
            <input type="number" name="u10_16" id="u10_16" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u17_25" class="form-label">Usia 17 - 25</label>
            <input type="number" name="u17_25" id="u17_25" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u26_30" class="form-label">Usia 26 - 30</label>
            <input type="number" name="u26_30" id="u26_30" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u31_35" class="form-label">Usia 31 - 35</label>
            <input type="number" name="u31_35" id="u31_35" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u36_40" class="form-label">Usia 36 - 40</label>
            <input type="number" name="u36_40" id="u36_40" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u41_45" class="form-label">Usia 41 - 45</label>
            <input type="number" name="u41_45" id="u41_45" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u46_50" class="form-label">Usia 46 - 50</label>
            <input type="number" name="u46_50" id="u46_50" class="form-control" value=0 required>
        </div>
        <div class="col-md-6">
            <label for="u51_keatas" class="form-label">Usia 51 - keatas</label>
            <input type="number" name="u51_keatas" id="u51_keatas" class="form-control" value=0 required>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Tambah Data Penduduk</button>
        </div>
    </div>
</form>

@endsection

