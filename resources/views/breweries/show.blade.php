@extends('layout.app')
@section('title', 'cervecerias')
@section('content')
<!-- ======= Chefs Section ======= -->
<section id="chefs" class="chefs">
    <div class="container my-5 py-5">
        <div class="section-title">
            <h2>Detalle <span>cerveceria</span></h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="member">
                    <div class="pic"><img src="{{Storage::url($cerveceria->img)}}" height="300" width="300" alt=""></div>
                    <div class="member-info">
                        <h2>{{ $cerveceria->user->name }}</h2>
                        <h4>{{$cerveceria->name}}</h4>
                        <p>{{$cerveceria->description}}</p>
                        <p>{{$cerveceria->capacity}}</p>
                        <p>{{$cerveceria->created_at}}</p>
                        @foreach ($beers as $beer)
                        <p> @if($cerveceria->beers->contains($beer)) {{ $beer->name }} @endif<p>
                        @endforeach
                        <a href="{{ route('breweries.edit', ['id'=>$cerveceria->id]) }}" class="btn btn-danger">Modificar cerveceria</a>
                        <form action="{{ route('breweries.destroy', ['id'=>$cerveceria->id] ) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-warning">Eliminar</button>
                        </form>
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section><!-- End Chefs Section -->
@endsection
