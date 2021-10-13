@extends('layouts.app')
@section('content')

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Maisonneuve2095328</h1>

                        <div class="row">
                            <div class=" col-md-4">
                                <div  class="mb-4">
                                        <a href=tudiant/etudiant/create" class="btn btn-primary"> Ajouter un étudiant</a>
                                </div>
                            </div>


                        </div>

                        <div class="card mb-4">
                            <div class="card-header">
                               
                                <h4>@lang('lang.listst')</h4>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped dataTable" style="width:100%">
                             
                                    <thead>
                                        <tr>
                                            <th  scope="col">Nom</th>
                                            <th scope="col">Email</th>
                                            <th scope="col">Téléphone</th>
                                            <th scope="col">Date de Naissance</th>
                                            <th scope="col">Ville</th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>
                                            <th scope="col"></th>

                                        </tr>
                                    </thead>

                                    <tbody>
                                        @forelse($etudiants as $etudiant)
                                        <!-- loop -->
                                        <tr>
                                            <td >{{ $etudiant->nom}}</td>
                                            <td>{{ $etudiant->email}}</td>
                                            <td>{{ $etudiant->phone}}</td>
                                            <td>{{ $etudiant->datenaiss}}</td>
                                            <td>{{ $etudiant->ville_id}}</td>

                                            <td><a class="active btn btn-small " href="etudiant/{{$etudiant->id}}/edit"><i class="fas fa-edit"></i></a> </td>
                                            
                                            <!-- Show -->
                                            <td><a href="etudiant/{{$etudiant->id}}" class="active btn btn-small" title="show"><i class="fas fa-eye text-success"></i></a> </td>
                                            <!-- delete -->
                                            <td><form action="{{route('etudiant.destroy', $etudiant->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                                        <i class="fas fa-trash  text-danger"></i>
                                                    </button>    
                                                </form>
                                            </td>
                                            
                                           
                                        </tr>
                                        @empty 
                                     <h2>Pas d'étudiants</h2>
                                        <!-- end loop -->
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
              
@endsection