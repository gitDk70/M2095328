@extends('layouts.appdash')
@section('content') 



<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      
      <article class="blog-post">
        <h2 class="blog-post-title">{{$forum->title}}</h2>
        <p class="blog-post-meta">{{$forum->date_added}} 
        <hr>
        <p>{{$forum->body}}</p>
      </article>
    </div>

        <div class="p-4">
          <h4 class="fst-italic">Social</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>

</main>
@endsection