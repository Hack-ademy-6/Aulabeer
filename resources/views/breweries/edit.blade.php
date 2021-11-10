@extends('layout.app')
@section('content')
@section('title', 'Modificar cerveceria')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container my-5 py-5">
        <div class="section-title">
            <h2><span>Modidicar</span> Cerveceria</h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>
    </div>
    <div class="map">
        <iframe style="border:0; width: 100%; height: 350px;"
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
            frameborder="0" allowfullscreen></iframe>
    </div>
    <div class="container">
        <div class="info-wrap">
            <div class="row">
                <div class="col-lg-3 col-md-6 info">
                    <i class="bi bi-geo-alt"></i>
                    <h4>Location:</h4>
                    <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>

                <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-clock"></i>
                    <h4>Open Hours:</h4>
                    <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
                </div>

                <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com<br>contact@example.com</p>
                </div>

                <div class="col-lg-3 col-md-6 info mt-4 mt-lg-0">
                    <i class="bi bi-phone"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 51<br>+1 5589 22475 14</p>
                </div>
            </div>
        </div>
        <h2>Añade tu cerveceria</h2>
        <form action="{{ route ('breweries.update',['id'=>$cerveceria->id] ) }}" method="post" role="form" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="row">
                <div class="col-12 col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                        value="{{ old('name') ?? $cerveceria->name }}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6 form-group">
                    <img src="{{Storage::url($cerveceria->img) }}" height="300" width="300" alt="">
                    <input type="file" name="img" class="form-control" id="img">
                    @error('img')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6 form-group mt-3">
                    <textarea name="description" id="description" placeholder="Description" cols="10" rows="2" class="form-control">{{ old('description') ?? $cerveceria->description}}</textarea>
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-12 col-md-6 form-group mt-3">
                    <input type="number" class="form-control" name="capacity" id="capacity" placeholder="Capacity"
                        value="{{ old('capacity') ?? $cerveceria->capacity}}">
                    @error('capacity')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                @foreach ($beers as $beer)
                <div class="form-check mt-3">
                    <input class="form-check-input" type="checkbox" value="{{ $beer->id }}" id="flexCheckDefault" name="beers[]" @if($cerveceria->beers->contains($beer)) checked @endif>
                    <label class="form-check-label" for="flexCheckDefault">
                        {{ $beer->name }}
                    </label>
                  </div>
                @endforeach
                <div class="col-12 text-center mt-2"><button type="submit" class="btn btn-lg btn-warning">Envía</button></div>
            </div>
        </form>
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>
    @endif --}}
    </div>
</section><!-- End Contact Section -->
@endsection