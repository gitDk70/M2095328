@extends('layouts.appdash')
@section('content')
<div class="container">
  <main>
    <div class="py-5 text-center">
      <img class="d-block mx-auto mb-4" src="https://source.unsplash.com/featured/?files" alt="" width="650" height="300">
      <h2>@lang('lang.upload')</h2>
    </div>

   
      <div class="col-lg-12">
          
          <form action="" method="POST" enctype="multipart/form-data">
          @csrf
          @if ($message = Session::get('success'))
          <div class="alert alert-success">
              <strong>{{ $message }}</strong>
            </div>
            @endif
            <div class="row">
                <div class="form-group mb-3 col-12">
                    <label>@lang('lang.title')</label>
                    <input type="text" name="title" class="form-control">
                    
                </div>
                <div class="form-group mb-3 col-12">
                    
                    <input type="file" name="file" class="form-control">
                    
                </div>
            </div>
            
            <div class="row mt-2">
                <div class="control-group col-12 text-center">
                    <button id="btn-submit" class="btn btn-primary">
                        @lang('lang.upload')
                    </button>
                </div>
            </div>
        </form>
        
</div>    
   
  </main>

  @endsection   
 