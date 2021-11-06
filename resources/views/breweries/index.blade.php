@extends('layout.app')
@section('title', 'cervecerias')
@section('content')
<!-- ======= Chefs Section ======= -->
<section id="chefs" class="breweries">
    <div class="container my-5 py-5">
        <div class="section-title">
            <h2>Todas las <span>cervecerias</span></h2>
            <p class="text-white">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>
        <div class="row">
            @foreach ($cervecerias as $cerveceria)
            <div class="col-12 col-md-6 col-lg-3">
                <div class="member">
                    <div class="pic"><img src="{{Storage::url($cerveceria->img)}}" height="300" width="300" alt=""></div>
                    <div class="member-info text-white text-center">
                        <h4>{{$cerveceria->name}}</h4>
                        <p>{{$cerveceria->description}}</p>
                        <p>{{$cerveceria->capacity}}</p>
                       <a href="{{ route('breweries.show', ['id'=>$cerveceria->id])}}" class="text-white text-decoration-none">Detalle de cerveceria</a>
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
