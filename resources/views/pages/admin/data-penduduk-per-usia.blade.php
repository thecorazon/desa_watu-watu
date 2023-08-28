@extends('layouts.dashboard')

@section('content')
    <h1 class="mt-4">Data Penduduk Per Usia</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Penduduk Per Usia</li>
    </ol>

    <div class="row mb-3">
        <div class="col-md-5">
            <a href="{{ route('tambahDataPendudukPerUsiaAdmin') }}" class="btn btn-primary">Tambah Data Penduduk Per Usia</a>
        </div>
    </div>

    @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            Hapus data penduduk berhasil!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


<div class="card mb-4">
    <div class="card-header">
        <i class="bi bi-table me-1"></i>
        Tabel Data Penduduk Per Usia Desa Watu-Watu
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <table id="tb-data-penduduk" class="table" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Tahun</th>
                            <th>0-5</th>
                            <th>6-9</th>
                            <th>10-16</th>
                            <th>17-25</th>
                            <th>26-30</th>
                            <th>31-35</th>
                            <th>36-40</th>
                            <th>41-45</th>
                            <th>46-50</th>
                            <th>50-keatas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataPendudukPerUsia as $data)
                        <tr>
                            <td>{{ $data->tahun }}</td>
                            <td>{{ $data->u0_5 }}</td>
                            <td>{{ $data->u6_9 }}</td>
                            <td>{{ $data->u10_16 }}</td>
                            <td>{{ $data->u17_25 }}</td>
                            <td>{{ $data->u26_30 }}</td>
                            <td>{{ $data->u31_35 }}</td>
                            <td>{{ $data->u36_40 }}</td>
                            <td>{{ $data->u41_45 }}</td>
                            <td>{{ $data->u46_50 }}</td>
                            <td>{{ $data->u51_keatas }}</td>
                            <td>
                                <div class="d-flex mt-2">
                                    <form action="{{ route('hapusDataPendudukPerUsiaAdmin', $data->id) }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger me-2" type="submit" onclick="return confirm('Yakin untuk hapus?')">Hapus</button>
                                    </form>
                                    <a href="{{ route('editDataPendudukPerUsiaAdmin', $data->id) }}" class="btn btn-primary me-2">Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
    <div class="card mb-4">
        <div class="card-header">
            <i class="bi bi-table me-1"></i>
            Tabel Data Penduduk Per Usia Desa Watu-Watu
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <table id="tb-data-penduduk-per-usia" class="table" style="width: 100%">
                        <thead>
                            <tr>
                                <th>Tahun</th>
                                <th>0-5</th>
                                <th>6-9</th>
                                <th>10-16</th>
                                <th>17-25</th>
                                <th>26-30</th>
                                <th>31-35</th>
                                <th>36-40</th>
                                <th>41-45</th>
                                <th>46-50</th>
                                <th>50-keatas</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dataPendudukPerUsia as $data)
                                <tr>
                                    <td>{{ $data->tahun }}</td>
                                    <td>{{ $data->u0_5 }}</td>
                                    <td>{{ $data->u6_9 }}</td>
                                    <td>{{ $data->u10_16 }}</td>
                                    <td>{{ $data->u17_25 }}</td>
                                    <td>{{ $data->u26_30 }}</td>
                                    <td>{{ $data->u31_35 }}</td>
                                    <td>{{ $data->u36_40 }}</td>
                                    <td>{{ $data->u41_45 }}</td>
                                    <td>{{ $data->u46_50 }}</td>
                                    <td>{{ $data->u51_keatas }}</td>
                                    <td>
                                        <div class="d-flex mt-2">
                                            <form action="{{ route('hapusDataPendudukPerUsiaAdmin', $data->id) }}"
                                                method="POST">
                                                @csrf
                                                <button class="btn btn-danger me-2" type="submit"
                                                    onclick="return confirm('Yakin untuk hapus?')">Hapus</button>
                                            </form>
                                            <a href="{{ route('editDataPendudukPerUsiaAdmin', $data->id) }}"
                                                class="btn btn-primary me-2">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
