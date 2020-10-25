<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Christian - Admin</title>
        <link href="{{asset('admin/css/styles.css')}}" rel="stylesheet" />
        <link href="{{url('https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" crossorigin="anonymous" />
        <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js')}}" crossorigin="anonymous"></script>
        <script src="{{url('//cdn.ckeditor.com/4.14.0/standard/ckeditor.js')}}"></script>
        <link href="{{ asset('css/toastr.min.css') }}" rel="stylesheet">
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="{{'/'}}">{{ __('Tableau de Bord') }}</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                {{-- <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-search"></i></button>
                    </div>
                </div> --}}
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    @guest
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    @else
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name }}</a>
                    @endguest
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#"><i class="fa fa-cog" aria-hidden="true"></i> Réglages</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-server" aria-hidden="true"></i> Journal d'activité/Log</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt" aria-hidden="true"></i> {{ __('Déconnexion') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                            <a class="nav-link" href="{{route('home')}}">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Tableau de Bord
                            </a>
                            {{-- Articles --}}
                            <div class="sb-sidenav-menu-heading">Articles</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Tous les articles
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('articles.create')}}">Ajouter un article</a>
                                    <a class="nav-link" href="{{route('articles.index')}}">Tous les articles</a>
                                </nav>
                            </div>
                            {{-- Ends Articles --}}
                            <div class="sb-sidenav-menu-heading">Catégories</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Tous les Catégories
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="{{route('categories.create')}}">Ajouter une catégorie</a>
                                        <a class="nav-link" href="{{route('categories.index')}}">Voir tous les catégorie</a>
                                    </nav>
                                </nav>
                            </div>

                            {{-- Emploi --}}
                            <div class="sb-sidenav-menu-heading">Contacts & Messages</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLayoutsEmploi" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
                                Contacts & Messages
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayoutsEmploi" aria-labelledby="headingOne" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="{{route('contact.index')}}">Contacts & Messages</a>
                                </nav>
                            </div>
                            {{-- Ends Emploi --}}
                        </div>
                    </div>
                    
                </nav>
            </div>
            <div id="layoutSidenav_content">
                
            {{-- yield content --}}
            @yield('content')
            {{-- content end --}}

            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Christian portfolio</div>
                        <div>
                            <a href="#">Privacy Policy</a>
                            &middot;
                            <a href="#">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
</div>
    <script src="{{url('https://code.jquery.com/jquery-3.5.1.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{url('https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin/js/scripts.js')}}"></script>
    <script src="{{url('https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin/assets/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('admin/assets/demo/chart-bar-demo.js')}}"></script>
    <script src="{{url('https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{url('https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js')}}" crossorigin="anonymous"></script>
    <script src="{{asset('admin/assets/demo/datatables-demo.js')}}"></script>
    <script src="{{asset('js/toastr.min.js')}}"></script>

    <script>
        var openFile = function(event) {
          var input = event.target;
      
          var reader = new FileReader();
          reader.onload = function(){
            var dataURL = reader.result;
            var output = document.getElementById('output');
            output.src = dataURL;
          };
          reader.readAsDataURL(input.files[0]);
        };
      </script>

    <script>
        CKEDITOR.replace( 'summary-ckeditor' );
    </script>
  
    <script>
        @if(Session::has('success'))
            toastr.success("{{ Session::get( 'success' ) }}");
        @endif
        @if(Session::has('info'))
            toastr.info("{{ Session::get( 'info' ) }}");
        @endif
    </script>
   
</body>
</html>
