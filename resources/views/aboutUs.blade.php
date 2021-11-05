@extends('layout.app')
@section('title', $title)
@section('content')
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container my-5 py-5">
        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <div class="row">
          @foreach ($persons as $person)
          <div class="col-12 col-md-6 col-lg-3">
            <div class="member">
              <div class="pic"><img src="{{ $person["img"] }}" height="300"  alt=""></div>
              <div class="member-info">
                <h4>{{ $person["name"] }} {{ $person["lastname"] }}</h4>
                <span>{{ $person["age"] }}</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </section><!-- End Chefs Section -->
@endsection
