

<section id="berita-desa" class="mt-3 mb-5">
    <div class="container">
        <div class="row text-center mt-4 mt-md-5" id="penduduk_data">
            <h4 class="text-center fw-bold mt-5">Data Kependudukan Desa Watu-Watu</h4>
            {{-- @dd($dataPenduduk) --}}
            <div class="row my-4">
                <form action="{{ route('home') }}" method="post" class="col-2 offset-5">
                    @csrf
                    <select name="pilih_tahun" id="pilih_tahun" class="form-control mx-auto mb-4">
                        <option value="2022" class="text-center">Tahun 2022</option>
                        <option value="2023" class="text-center">Tahun 2023</option>
                        <option value="2024" class="text-center">Tahun 2024</option>
                    </select>
                </form>
            </div>
            <div class="row text-center mt-4 mt-md-5">
                <div class="col-md-4 mt-3 mt-md-0">
                    <img src="{{ asset('assets/images/penduduk.png') }}" alt="">
                    <h5 class="mt-2">Total Penduduk 
                        @if (isset($dataPenduduk))
                        {{ $dataPenduduk->jumlah_penduduk }}
                        @else
                        0
                    @endif  Jiwa</h5>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
                    <img src="{{ asset('assets/images/laki-laki.png') }}" alt="">
                    <h5 class="mt-2">Total Laki Laki 
                        @if (isset($dataPenduduk))
                        {{ $dataPenduduk->jumlah_laki_laki }}
                        @else
                        0
                    @endif  Jiwa</h5>
                </div>
                <div class="col-md-4 mt-3 mt-md-0">
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
    </div>

    <script>
    $(document).ready(function () {
        // Fungsi untuk mengupdate data penduduk
        function updateData(dataPenduduk) {
            $('#penduduk_data').find('#total_penduduk').text(dataPenduduk.jumlah_penduduk);
            $('#penduduk_data').find('#total_laki_laki').text(dataPenduduk.jumlah_laki_laki);
            $('#penduduk_data').find('#total_perempuan').text(dataPenduduk.jumlah_perempuan);
        }

        // Ketika pilihan tahun berubah
        $('#pilih_tahun').on('change', function () {
            var selectedYear = $(this).val();

            // Kirim permintaan AJAX untuk mendapatkan data penduduk berdasarkan tahun yang dipilih
            $.ajax({
                url: '{{ route("home") }}',
                method: 'get',
                data: { pilih_tahun: selectedYear },
                success: function (response) {
                    updateData(response.dataPenduduk);
                },
                error: function (xhr) {
                    console.log(xhr.responseText);
                }
            });
        });
    });
</script>

</section>
