@extends('layouts.app')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                       

                        <div class="row">
                            <div class=" col-md-4">
                                
                            </div>


                        </div>

                        <div class="card mb-4">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">@lang('lang.register')</h3></div>
                                    @if(session('success'))
                                        <span class="text-danger">{{ session('success')}}</span>
                                    @endif
                                   <div class="card-body">
                                   <form method="POST" action="{{ route('register.custom') }}">
                                        @csrf
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="Name" id="name" class="form-control" name="name" value="{{ old('name')}}" required
                                                autofocus>
                                            @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" placeholder="Email" id="email" class="form-control" name="email" value="{{ old('email')}}" required
                                                autofocus>
                                            @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group mb-3">
                                            <input type="password" placeholder="Password" id="password" class="form-control" name="password" required>
                                            @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="hidden"  name="is_admin" value="0" required>
                                        </div>

                                        <div class="form-group mb-3">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember"> @lang('lang.remember')
                                                </label>
                                            </div>
                                        </div>

                                        <div class="d-grid mx-auto">
                                        
                                            <button type="submit" class="btn btn-dark btn-block">@lang('lang.signup')</button>
                                        </div>
                                    </form>

                                   </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="registration">@lang('lang.newst') </a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
