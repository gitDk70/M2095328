@extends('layouts.app')
@section('content')
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Gestion des inscriptions - Maisonneuve2095328</h1>
                        
                        <div class="row">
                            <div class=" col-md-4">
                                <div  class="mb-4">
                                        <a href="home" class="btn btn-primary"> Retour</a>
                                </div>
                            </div>
                          
                           
                        </div>
                        
                        <div class="card mb-4">
                            
                            <div class="card-body">
                                <table class="table" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Téléphone</th>
                                            <th scope="col">Date de Naissance</th>
                                            <th scope="col">Ville</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            
                                        </tr>
                                    </thead>
                               
                                    <tbody>
                                        <tr>
                                            <td>{{ $etudiant->nom}}</td>
                                            <td>{{ $etudiant->email}}</td>
                                            <td>{{ $etudiant->phone}}</td>
                                            <td>{{ $etudiant->datenaiss}}</td>
                                            <td>{{ $etudiant->ville_id}}</td>
                                          
                                          
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection