@extends('layout.app')
@section('content')
@section('title', 'Login')
<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container my-5 py-5">
        <div class="section-title">
            <h2><span>Login</h2>
            <p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque
                vitae autem.</p>
        </div>
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
        <form action="/login" method="post" role="form">
            @csrf
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        value="{{ old('email') }}">
                    @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Your Password">
                    @error('password')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="text-center mt-2"><button type="submit" class="btn btn-lg btn-warning">Envía</button></div>
        </form>
    </div>
</section><!-- End Contact Section -->
@endsection