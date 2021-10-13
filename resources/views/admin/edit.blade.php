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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Mise à jour de: {{ $etudiant->nom}} </h3></div>
                                    <div class="card-body">
                                        <form method="POST">
                                        @csrf
                                        @method('PUT')
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="Name" name="nom" value="{{$etudiant->nom}}" type="text" placeholder="Nom" />
                                                        <label for="Name">Nom</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="Phone" name="phone" value="{{$etudiant->phone}}" type="text" placeholder="Téléphone" />
                                                        <label for="Phone">Téléphone</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" id="inputEmail" name="email" value="{{$etudiant->email}}" type="email" placeholder="nom@exemple.com" />
                                                <label for="inputEmail">Courriel</label>
                                            </div>
                                            <div class="row mb-3">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="Datenaiss" name="datenaiss" value="{{$etudiant->datenaiss}}" type="date" placeholder="Date de naissance" />
                                                        <label for="Datenaiss">Date de naissance</label>
                                                    </div>
                                                </div>
                                                <!-- select -->
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <select name="villes" id="villes" class="form-select">
                                                            <option value="Choisir la ville"></option>
                                                            @foreach($villes as $ville)
                                                            <option value="{{$ville->id}}" @if($ville->id === $etudiant->ville_id)  selected @endif>{{$ville->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <input class="form-control" name="ville_id" value="{{$ville->id}}" id="ville" type="hidden" />
                                                       
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="mt-4 mb-0">
                                            <button id="btn-submit" class="btn btn-primary">Mettre à jour </button>   
                                            <!-- <div class="d-grid"><a class="btn btn-primary btn-block">Ajouter</a></div> -->
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
