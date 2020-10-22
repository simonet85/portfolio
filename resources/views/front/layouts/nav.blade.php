<nav class="navbar navbar-expand-lg fixed-top custom-nav sticky">
    <div class="container">
        <!-- LOGO -->
        <a class="logo navbar-brand" href="index-2.html">
            <img src="{{asset('front/img/logo.png')}}" alt="" class="img-fluid logo-light"> 
            <img src="{{asset('front/img/logo-dark.png')}}" alt="" class="img-fluid logo-dark">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <i class="mdi mdi-menu"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto navbar-center" id="mySidenav">
                <li class="nav-item active">
                    <a href="#home" class="nav-link">Accueil</a>
                </li>
                {{-- <li class="nav-item active">
                    <a href="{{url('/test')}}" class="nav-link">Test</a>
                </li> --}}
                <li class="nav-item">
                    <a href="#about" class="nav-link">À propos de</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#services" class="nav-link">Services</a>
                </li> -->
                <li class="nav-item">
                    <a href="#resume" class="nav-link">CV</a>
                </li>
                <li class="nav-item">
                    <a href="#work" class="nav-link">Projets Réalisés</a>
                </li>
                <!-- <li class="nav-item">
                    <a href="#client" class="nav-link">Clients</a>
                </li> -->
                <li class="nav-item">
                    <a href="#blog" class="nav-link">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#contact" class="nav-link">Contact</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>

