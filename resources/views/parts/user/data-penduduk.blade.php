

<section id="berita-desa">
    <div class="container my-5">
        <div class="row text-center mt-4 mt-md-5" id="penduduk_data">
            <h4 class="text-center fw-bold mt-5">Data Kependudukan Desa Watu-Watu</h4>
        <h5 class="text-center fw-bold">Tahun {{ $dataPenduduk->tahun ??  date('Y') }}</h5>

            <div class="row text-center mt-4 mt-md-5">
                <div class="col-md-4 mt-3 mt-md-0" data-aos="fade-right" data-aos-duration="1500">
                    <img src="{{ asset('assets/images/penduduk.png') }}" alt="">
                    <h5 class="mt-2">Total Penduduk 
                        @if (isset($dataPenduduk))
                        {{ $dataPenduduk->jumlah_penduduk }}
                        @else
                        0
                    @endif  Jiwa</h5>
                </div>
                <div class="col-md-4 mt-3 mt-md-0" data-aos="fade-up" data-aos-duration="1500">
                    <img src="{{ asset('assets/images/laki-laki.png') }}" alt="">
                    <h5 class="mt-2">Total Laki Laki 
                        @if (isset($dataPenduduk))
                        {{ $dataPenduduk->jumlah_laki_laki }}
                        @else
                        0
                    @endif  Jiwa</h5>
                </div>
                <div class="col-md-4 mt-3 mt-md-0" data-aos="fade-left" data-aos-duration="1500">
                    <img src="{{ asset('assets/images/perempuan.png') }}" alt="">
                    <h5 class="mt-2">Total Perempuan 
                        @if (isset($dataPenduduk))
                        {{ $dataPenduduk->jumlah_perempuan }}
                        @else
                        0
                    @endif  Jiwa</h5>
                </div>
            </div>
        </div>

        <div class="col-12 text-center"  data-aos="fade-up" data-aos-duration="1500">
            <a class="btn btn-outline-primary mt-3" type="button" href="/data-penduduk">Selengkapnya</a>
        </div>
    </div>

</section>
