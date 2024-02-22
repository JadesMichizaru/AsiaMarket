<nav class="navbar navbar-expand-lg bg-white fixed-top py-4 shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">Asia<span>Market</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <div class="input-group mx-auto mt-5 mt-lg-0">
                <input type="text" class="form-control" placeholder="Mau cari apa?" aria-label="Mau cari apa?"
                    aria-describedby="button-addon2">
                <button class="btn btn-outline-success" type="button" id="button-addon2"><i
                        class="bx bx-search"></i></button>
            </div>
            <ul class="navbar-nav ms-auto mt-3 mt-sm-0">
                <li class="nav-item me-3">
                    <a class="nav-link active" href="#">
                        <i class="bx bx-heart"></i>
                        <span class="badge text-bg-warning rounded-circle position-absolute">2</span>
                    </a>
                </li>
                <li class="nav-item me-5">
                    <a class="nav-link" href="{{ route('carts.index') }}">
                        <i class="bx bx-cart-alt"></i>
                        <span class="badge text-bg-warning rounded-circle position-absolute">3</span>
                    </a>
                </li>
                <!-- mobile menu -->
                <div class="dropdown mt-3 d-lg-none">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                        <li><a class="dropdown-item" href="{{ url('/home') }}">Home</a></li>
                        <li><a class="dropdown-item" href="{{ url('/products') }}">Best Seller</a></li>
                        <li><a class="dropdown-item" href="{{ url('/products') }}">New Arrival</a></li>
                        <li><a class="dropdown-item" href="{{ url('/products') }}">Blog</a></li>
                    </ul>
                </div>
                <li class="nav-item mt-5 mt-lg-0 text-center">
                    <a class="nav-link btn-second me-lg-3" href="{{ url('/login') }}">Login</a>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </li>
                <li class="nav-item mt-3 mt-lg-0 text-center">
                    <a class="nav-link btn-first" href="{{ url('/register') }}">Register</a>
                </li>

                <form action="{{ url('logout') }}" method="POST">
                    @csrf
                    <button class="nav-link mx-3 btn-link" type="submit"> Logout </button>
                </form>

            </ul>
        </div>
    </div>
</nav>
