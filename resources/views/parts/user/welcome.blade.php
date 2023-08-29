<section id="about-desa" class="about-section-padding mt-2 mb-2">
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-4 col-md-12 col-12 text-center my-5">
                <div class="about-img">
                    <img src="{{ asset('assets/images/logo_bombana.png') }}" alt="" class="img-fluid" id="img-about">
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-12 ps-lg-3 my-5">
                <div class="about-text">
                    <p class="fs-4 fw-bold">Desa Watu-Watu <br> Kecamatan Lantari Jaya <br> Kabupaten Bombana</p>
                    @isset($profilDesa)
                        {!! $profilDesa->deskripsi !!}
                    @endisset
                </div>
            </div>
        </div>
    </div>
</section>

