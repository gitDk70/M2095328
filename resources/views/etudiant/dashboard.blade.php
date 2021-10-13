@extends('layouts.appdash')
@section('content')

  

<main class="container">
  <div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
   
      <h1 class="display-4 fst-italic">@lang('lang.welcmessage')</h1>
      <p class="lead my-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus dolores illo tempore cupiditate eos deleniti, itaque labore nostrum vel repudiandae.</p>
      <p class="lead mb-0"><a href="#" class="text-white fw-bold">@lang('lang.suite')</a></p>
    </div>
  </div>

  <div class="row mb-2">
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">World</strong>
          <h3 class="mb-0">@lang('lang.featured')</h3>
          <div class="mb-1 text-muted">Nov 12</div>
          <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">@lang('lang.cont') </a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
          </svg>
          <img src="https://source.unsplash.com/featured/?{tech}" width="200" height="250" alt="">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Design</strong>
          <h3 class="mb-0">@lang('lang.ptitle')</h3>
          <div class="mb-1 text-muted">Nov 11</div>
          <p class="mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="stretched-link">@lang('lang.cont')</a>
        </div>
        <div class="col-auto d-none d-lg-block">
          <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"></svg>
          <img src="https://source.unsplash.com/featured/?university" width="200" height="250" alt="">
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5">
    <div class="col-md-8">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
      @lang('lang.welcome'), {{$name}}
      </h3>
      @forelse($forums as $forum)
      <article class="blog-post">
        <h2 class="blog-post-title">{{$forum->title}}</h2>
        <p class="blog-post-meta">{{$forum->date_added}} 
        <!-- //boucler dans users pour extraire le nom de l'auteur -->
        @forelse($users as $user)
          @if($user->id === $forum->user_id)
          <a href="#">{{$user->name}}</a></p>
          <nav class="nav">
              @if($forum->user_id == $user_id)
              <li class="nav-link "><a class="lien" href="forum/{{$forum->id}}/edit">@lang('lang.edit')</a></li>

              <td><form action="{{route('forum.destroy', $forum->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button class="lien" type="submit" title="@lang('lang.delete')" style="border: none; background-color:transparent;">
                <i class="fas fa-trash  text-danger"></i>
                </button>    
                </form>
               </td>
            
              <!-- <li class="nav-link lien"><a href="forum/{{$forum->id}}/delete">@lang('lang.delete')</a></li> -->
          </nav>    
              @endif
          @endif
        @empty  
        @endforelse

       
               
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, ducimus amet reiciendis sunt dolore possimus aperiam corrupti libero impedit nostrum.</p>
        <hr>
        <p>{{$forum->body}}</p>
      </article>
      @empty 
       <h2>Pas d'articles</h2>
      @endforelse
     
    </div>

    <div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">@lang('lang.about')</h4>
          <p class="mb-0">
            <p>{{$name}}</p>
          </p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">@lang('lang.myart')</h4>
          <ol class="list-unstyled mb-0">
          @forelse($forums as $forum)

                @if($forum->user_id === $user_id)
                  <li><a href="forum/{{$forum->id}}">{{$forum->title}}</a></li>
                @endif
                @empty 
                <h3>Pas d'articles</h3>
          @endforelse
          </ol>
        </div>
               
@endsection     
     