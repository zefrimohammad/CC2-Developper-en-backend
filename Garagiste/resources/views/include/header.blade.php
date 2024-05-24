<style>

    .custom-header {
        margin-bottom: 100px;
        background-color: #677687;
        color: white;
        border-radius: 0 0 70px 70px;
    }


    a:hover {
        color: #0dcaf0 !important;
    }

</style>


<nav class="custom-header navbar navbar-expand-lg shadow shadow-1">
    <div class="container">
        <!-- Logo on the left -->
        <div class="navbar-brand">
            <div style="margin: 9px;">Garagiste</div>
        </div>

        <!-- Toggle button for small screens -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <!-- Centered navigation links -->
            <div class="navbar-nav mx-auto" style="margin-right: 30px !important;">
                <a class="nav-link active" style="margin-left: 2em !important;" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link active" style="margin-left: 2em !important;" aria-current="page" href="#services-section">Services</a>
                <a class="nav-link active" style="margin-left: 2em !important;" aria-current="page" href="#contact-section">Contact</a>
                <a class="nav-link active" style="margin-left: 2em !important;" aria-current="page" href="#">About</a>
            </div>

            <div class="ms-auto">
                <ul class="navbar-nav">
                    @auth
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-gear"></i> <span>{{ auth()->user()->name }}</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('profile') }}">Edit Profile</a></li>
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Log out</a></li>
                            </ul>
                        </li>
                    @else
                        <li class="nav-item ">
                            <a class="nav-link" href="{{ route('login') }}"><button
                                    class="btn btn-secondary">Login</button></a>
                        </li>
                    @endauth
                </ul>
            </div>
        </div>
    </div>
</nav>
