<!-- resources/views/partials/header.blade.php -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="{{ asset('images/logos/logo.png') }}" alt="Bookalley" height="30"> Bookalley
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/cart') }}">
                            <i class="fas fa-shopping-cart"></i> Cart
                            <span class="badge badge-success">3</span> <!-- Placeholder for cart items count -->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">
                            <i class="fas fa-user"></i> Sign In
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
