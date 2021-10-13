<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Maisonneuve2095328</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>

    </head>
    <body class="sb-nav-fixed">
    @php $locale = session()->get('locale'); @endphp
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav first-item">
                <li class="nav-item" >
                    <a class="dropdown-item @if($locale=='en') bg-warning @endif" href="lang/en"><img src="{{asset('images/flag/en.png')}}" > English</a>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item @if($locale=='fr') bg-warning @endif" href="lang/fr"><img src="{{asset('images/flag/fr.png')}}" > Français</a>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">

                        <a class="nav-link " href="home" >

                            </a>
                            <a class="nav-link main-nav" href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>

                                @lang('lang.admin')

                            </a>
                            <a class="nav-link " href="home" >
                                <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>

                                @lang('lang.home')

                            </a>

                            <a class="nav-link">
                                <div href="#" class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                                Contact


                            </a>
                            <a class="nav-link " href="#">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                @lang('lang.about')
                            </a>

                        </div>
                    </div>

                </nav>
            </div>
            @yield('content')

            <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Maisonneuve2095328</div>
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/dt.js"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>

    </body>
</html>
