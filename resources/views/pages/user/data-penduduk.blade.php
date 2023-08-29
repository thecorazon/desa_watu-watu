@extends('layouts.app')

@section('meta-description', 'Data Penduduk Desa Watu-Watu')

@section('meta-keywords', 'Data Penduduk, Watu-Watu, Desa, Lantari Jaya, Bombana, Kabupaten Bombana, Kecamatan Lantari
    Jaya')

@section('title', 'Desa Watu-Watu | Data Penduduk Desa')

@section('content')
<section id="data-penduduk" class="mt-3 mb-5">
    <div class="container">
        <form action="{{ route('dataPenduduk') }}" method="post">
            @csrf
            <div class="row mx-0">
                <div class="col-3 offset-4 me-0">

                    <select name="data" id="" class="form-control">

                        @foreach ($date as $data)
                        <option class="form-control" value="{{ $data->tahun ?? date('Y') }}" {{($dataPenduduk->tahun ?? date('Y')) == $data->tahun ? "selected" : ""}}>Tahun {{ $data->tahun }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-2 mx-0">
                    <button class="btn btn-outline-primary">Lihat</button>
                </div>
            </div>


        </form>
        <h4 class="text-center fw-bold mt-5">Data Kependudukan Desa Watu-Watu</h4>
        <h5 class="text-center fw-bold">Tahun {{ $dataPenduduk->tahun ?? date('Y')}}</h5>

            <div class="row text-center mt-4 mt-md-5">
                <div class="col-lg-8 col-md-12 mt-4"> 
                    <h5 class="mb-5"><b>Data Penduduk Per Usia</b></h5>

                    <div class="row">
                        <div class="col-4 mt-3 mt-md-0">
                            <img src="{{ asset('assets/images/penduduk.png') }}" alt="" width="80">
                            <h6 class="mt-2">Total Penduduk
                                @if (isset($dataPenduduk))
                                    {{ $dataPenduduk->jumlah_penduduk }}
                                @else
                                    0
                                @endif Jiwa
                            </h6>
                        </div>
                        <div class="col-4 mt-3 mt-md-0">
                            <img src="{{ asset('assets/images/laki-laki.png') }}" alt="" width="100">
                            <h5 class="mt-2">Total Laki Laki @if (isset($dataPenduduk))
                                {{ $dataPenduduk->jumlah_laki_laki }}
                                @else
                                0
                            @endif Jiwa</h5>
                        </div>
                        <div class="col-4 mt-3 mt-md-0">
                            <img src="{{ asset('assets/images/perempuan.png') }}" alt="" width="100">
                            <h5 class="mt-2">Total Perempuan @if (isset($dataPenduduk))
                                {{ $dataPenduduk->jumlah_perempuan }}
                                @else
                                0
                            @endif Jiwa</h5>
                        </div>



                    </div>
                </div>
                <div class="col-lg-4 col-md-12  mt-4"> 
                    <h5 class="mb-4"><b>Data Penduduk Per Usia</b></h5>
                    <table class="table table-bordered border-primary" align="center">
                        <tr>
                            <td>Usia 0 - 5</td>
                            <td>{{ $dataPendudukPerusia->u0_5 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 6 - 9</td>
                            <td>{{ $dataPendudukPerusia->u6_9 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 10 - 16</td>
                            <td>{{ $dataPendudukPerusia->u10_16 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 17 - 25</td>
                            <td>{{ $dataPendudukPerusia->u17_25 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 26 - 30</td>
                            <td>{{ $dataPendudukPerusia->u26_30 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 31 - 35</td>
                            <td>{{ $dataPendudukPerusia->u31_35 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 36 - 40</td>
                            <td>{{ $dataPendudukPerusia->u36_40 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 41 - 45</td>
                            <td>{{ $dataPendudukPerusia->u41_45 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 46 - 50</td>
                            <td>{{ $dataPendudukPerusia->u46_50 ?? '' }}</td>
                        </tr>
                        <tr>
                            <td>Usia 51 - keatas</td>
                            <td>{{ $dataPendudukPerusia->u51_keatas ?? '' }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
