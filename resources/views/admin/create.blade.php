@extends('layouts.layout')
@section('content')

    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Nouvel étudiant</h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                        @csrf
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="Name" name="nom" type="text" placeholder="Nom" />
                                                        <label for="Name">Nom</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="Phone" name="phone" type="text" placeholder="Téléphone" />
                                                        <label for="Phone">Téléphone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" type="email" placeholder="nom@exemple.com" />
                                                <label for="inputEmail">Courriel</label>
                                            </div>
                                            <!-- mot de passe -->
                                                <div class="form-floating mb-3">
                                                <input class="form-control" id="pwd" name="password" type="password" placeholder="Mot de passe" />
                                                <label for="pwd">Mot de passe</label>
                                            </div>
                                            <!-- date de naissance -->
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="Datenaiss" name="datenaiss" type="date" placeholder="Date de naissance" />
                                                        <label for="Datenaiss">Date de naissance</label>
                                                    </div>
                                                </div>
                                                <!-- villes -->
                                                <!-- select -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                    <label>Ville</label>
                                                        <select name="villes" id="villes" class="form-select">
                                                            <option value="Choisir la ville"></option>
                                                            @foreach($villes as $ville)
                                                            <option value="{{$ville->id}}">{{$ville->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <input class="form-control" name="ville_id" value="{{$ville->id}}" id="ville" type="hidden" />
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="mt-4 mb-0">
                                            <button id="btn-submit" class="btn btn-primary">Ajouter </button>   
                                         
                                            </div>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
@endsection            