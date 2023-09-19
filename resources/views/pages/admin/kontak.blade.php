@extends('layouts.dashboard')

@section('content')

<h1 class="mt-4">Kontak</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
    <li class="breadcrumb-item active" aria-current="page">Kontak</li>
</ol>


<div class="row">
    <div class="col-md-6">

        @if(Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Edit data kontak berhasil!
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



        <form action="{{ route('editKontak') }}" method="POST" class="my-3" enctype="multipart/form-data">
            @csrf



            <div class="row">
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <textarea name="alamat" id="alamat" cols="70" rows="4" class="form-control">@isset($dataKontak->alamat) {{ $dataKontak->alamat }}@endisset</textarea>
                </div>
                <div class="mb-3">
                    <label for="no_telp" class="form-label">No Telp.</label>
                    <input class="form-control" type="text" name="no_telp" value="@isset($dataKontak->no_telp) {{ $dataKontak->no_telp }}@endisset">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input class="form-control" type="text" name="email" value="@isset($dataKontak->email) {{ $dataKontak->email }}@endisset">
                </div>
                <input id="id" value="@isset($dataKontak->id) {{ $dataKontak->id }} @endisset" type="hidden" name="id" required>
            </div>

            <div class="row mt-3">
                <div class="col-md-5">
                    <button class="btn btn-primary" type="submit">Edit Kontak</button>
                </div>
            </div>

            </form>
</div>
</div>
   {{--  @if(Session::has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        Edit data sejarah desa berhasil!
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

    <div class="row">
        <div class="col-md-8">
            <label for="img-input" class="form-label">Unggah Gambar</label>
            <input type="file" class="form-control" id="img-input" name="img-sejarah-desa" value="@isset($dataSejarahDesa) {{ $dataSejarahDesa->img_sejarah }} @endisset">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-6">
            <img src="#" alt="" width="100%" id="img-preview">
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-8">
            <label for="deskripsi-sejarah" class="form-label">Deskripsi Sejarah Desa</label>
            <input id="deskripsi-sejarah" value="@isset($dataSejarahDesa) {{ $dataSejarahDesa->deskripsi_sejarah }} @endisset" type="hidden" name="deskripsi-sejarah" required>
            <trix-editor input="deskripsi-sejarah" required></trix-editor>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-5">
            <button class="btn btn-primary" type="submit">Edit Sejarah Desa</button>
        </div>
    </div> --}}



@endsection