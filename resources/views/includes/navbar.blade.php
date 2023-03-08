<!-- Navbar  -->
<nav class="navbar navbar-expand-lg ms-auto position-fixed w-100" style="background-color: #18C3FF" >
    <div class="container">
        <a class="navbar-brand" href="{{route('home')}}">
            <div class="d-flex">
                <img src=" {{url('images/LOGO-removebg-preview.png')}} " alt="" width="60" srcset="">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h2>SIMPANTAUMULI POP</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p style="font-size: 10px;">PENGADILAN TATA USAHA NEGARA BANDAR LAMPUNG</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <button class="navbar-toggler" type="button"
        data-bs-toggle="offcanvas" 
        data-bs-target="#navbarOffcanvas"
        aria-controls="navbarOffcanvas"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="offcanvas offcanvas-end" id="navbarOffcanvas" tabindex="-1" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header bg-dark">
                <a href="#" style="text-decoration: none;"><h5 class="offcanvas-title text-light" id="offcanvasNavbarLabel">Panjar</h5></a>
                <button type="button" class="btn-close btn-close-white text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body" id="isi-nav">          
                <div class="navbar-nav justify-content-end flex-grow-1 ">
                    @guest
                        <a class="nav-link mx-2" aria-current="page" href=" {{route('home')}} ">Beranda</a>
                        <a class="nav-link mx-2" href="#">Tentang</a>
                        <a class="nav-link mx-2 nav-masuk " href="{{url('login')}}">Login</a>
                        <a class="nav-link nav-daftar mx-2" href="{{url('register')}}">Daftar</a>
                    @endguest

                    @auth
                    <a class="nav-link mx-2" aria-current="page" href=" {{route('home')}} ">Beranda</a>
                    <a class="nav-link mx-2" href="#">Tentang</a>
                    <form action="{{url('logout')}}" method="POST">
                        @csrf
                        <button class="nav-link text-white ms-2 btn btn-secondary" type="submit">
                            Keluar
                        </button>
                    </form>
                    @endauth
                </div>
            </div>
        </div> 
    </div>
</nav>