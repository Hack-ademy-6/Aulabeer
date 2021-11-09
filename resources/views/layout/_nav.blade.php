 <!-- ======= Top Bar ======= -->
 <section id="topbar" class="d-flex align-items-center sticky-top topbar-transparent">
     <div
         class="container-fluid container-xl d-flex align-items-center justify-content-center justify-content-lg-start">
         <i class="bi bi-phone d-flex align-items-center"><span>+1 5589 55488 55</span></i>
         <i class="bi bi-clock ms-4 d-none d-lg-flex align-items-center"><span>Mon-Sat: 11:00 AM - 23:00 PM</span></i>
     </div>
 </section>

 <!-- ======= Header ======= -->
 <header id="header" class="sticky-top d-flex align-items-center header-transparent">
     <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

         <div class="logo me-auto">
             <h1><a href="{{ route('welcome') }}">Aulabeer</a></h1>
             <!-- Uncomment below if you prefer to use an image logo -->
             <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
         </div>
         <nav id="navbar" class="navbar order-last order-lg-0">
             <ul>
                 <li><a class="nav-link scrollto active" href="{{ route('welcome') }}">Home</a></li>
                 <li><a class="nav-link scrollto" href="{{ route('about') }}">Sobre nosotros</a></li>
                 <li><a class="nav-link scrollto" href="{{ route('breweries.index') }}">Cervecerias</a></li>
                 <li><a class="nav-link scrollto" href="{{ route('contact') }}">Contact</a></li>
                 @auth
                 <li class="dropdown"><a href="#"><span>{{ auth()->user()->name }}</span>
                         <i class="bi bi-chevron-down"></i></a>
                     <ul>
                         <li>
                             <a href="#" class="nav-link scrollto" id="logout">Logout</a>
                             <form id="logout-form" action="/logout" method="POST">
                                 @csrf
                             </form>
                         </li>
                         <li><a class="nav-link scrollto" href="{{ route('breweries.create') }}">Añade tu cerveceria</a>
                         </li>
                         @endauth
                         @guest
                         <li><a class="nav-link scrollto" href="/login">Login</a></li>
                         <li><a class="nav-link scrollto" href="/register">Register</a></li>
                         @endguest
                     </ul>

             </ul>
             <i class="bi bi-list mobile-nav-toggle"></i>
         </nav><!-- .navbar -->

         <a href="#book-a-table" class="book-a-table-btn scrollto">Book a table</a>

     </div>
 </header><!-- End Header -->
