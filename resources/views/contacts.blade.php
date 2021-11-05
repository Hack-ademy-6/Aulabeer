@extends('layout.app')
@section('title', 'Mis contactos')
@section('content')
    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container my-5 py-5">
        <div class="section-title">
          <h2>Our Proffesional <span>Chefs</span></h2>
          <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
        </div>
        <div class="row">
          @foreach ($contacts as $contact)
          <div class="col-12 col-md-6 col-lg-3">
            <div class="member">
              <div class="member-info">
                <h4>{{$contact->name}}</h4>
               <p>{{$contact->email}}</p>
               <p>{{$contact->message}}</p>
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