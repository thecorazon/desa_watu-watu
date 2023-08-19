
@extends('fronts/include/Header_Comman')
@section('content')

<main id="main">

<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs" data-aos="fade-in">
  <div class="container">
    <h2>Events</h2>
    <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
  </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Events Section ======= -->
<section id="events" class="events">
  <div class="container" data-aos="fade-up">

    <div class="row">
      @foreach($result as $data)
      <div class="col-md-6 d-flex align-items-stretch">
        <div class="card">
          <div class="card-img">
            <img src="image/{{$data->Photo}}"  alt="...">
          </div>
          <div class="card-body">
            <h5 class="card-title"><a href="">{{$data->Name}}</a></h5>
            <p class="fst-italic text-center">{{$data->Posiction}}/</p>
            <p class="card-text">{{$data->About}}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section><!-- End Events Section -->

</main><!-- End #main -->
@endsection