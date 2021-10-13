<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Forum - Maisonneuve2095328</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/blog/">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.11.1/css/jquery.dataTables.css" rel="stylesheet" />
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    

    <!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/blog.css')}}" rel="stylesheet" />
  </head>
  <body>
  @php $locale = session()->get('locale'); @endphp  
<div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
      <a class="btn btn-sm btn-outline-secondary" href="{{ route('logout') }}"> @lang('lang.logout')</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="#">M2095328</a>
      </div>
      
      <div class="col-4 d-flex nav-left align-items-center">
        <a class="link-secondary" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>@lang('lang.search')</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <ul class="navbar-nav first-item">
                <li class="nav-item" >
                    <a class="dropdown-item @if($locale=='en') bg-warning @endif" href="lang/en">English</a>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item @if($locale=='fr') bg-warning @endif" href="lang/fr">Français</a>
                </li>
            </ul>
        
        
      </div>
    </div>
  </header>
  <div class="nav-scroller py-1 mb-2">
    <nav class="nav menu d-flex justify-content-between">
      <a class="p-2 link-secondary" href="#">@lang('lang.profile')</a>
      <a class="p-2 link-secondary" href="{{ route('forum.home') }}">@lang('lang.home')</a>
      <a class="p-2 link-secondary" href="{{ route('doc.show') }}">Documents</a>
      <a class="p-2 link-secondary" href="{{ route('forum.upload') }}">@lang('lang.upload')</a>
      <a class="p-2 link-secondary" href="{{ route('forum.create') }}">@lang('lang.addart')</a>
     
    </nav>
  </div>
  
</div>
<hr>

@yield('content')

</div>
</div>
</div>

</main>

<footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; 2021 M2095328</p>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacy</a></li>
      <li class="list-inline-item"><a href="#">Terms</a></li>
      <li class="list-inline-item"><a href="#">Support</a></li>
    </ul>
  </footer>
</div>


   
   
  </body>
</html>

    
</body>
</html>
