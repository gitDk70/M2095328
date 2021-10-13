@extends('layouts.appdash')
@section('content')
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://source.unsplash.com/featured/?{writer}" alt="" width="650" height="300">
      <h2>@lang('lang.addart')</h2>
    </div>

   
      <div class="col-lg-12">
       
      <form action="" method="POST">
                  @csrf
                  <div class="row">
                      <div class="control-group col-12">
                          <label for="title">@lang('lang.ptitle') </label>
                          <input type="text" id="title" class="form-control" name="title" placeholder="Entrer votre titre " required>
                      </div>
                    </div>
                  <div class="row">
                      <div class="control-group col-12 mt-2">
                          <label for="body">@lang('lang.body')</label>
                          <textarea id="body" class="form-control" name="body" placeholder="Entrer votre texte"  rows="" required></textarea>
                      </div>
                  </div>
                  <div class="row">
                      <div class="control-group col-12 mt-2">
                        
                      </div>
                  </div>
                  <div class="row mt-2">
                      <div class="control-group col-12 text-center">
                          <button id="btn-submit" class="btn btn-primary">
                          @lang('lang.save')
                          </button>
                      </div>
                  </div>
              </form>

     
  </main>

  @endsection   
 