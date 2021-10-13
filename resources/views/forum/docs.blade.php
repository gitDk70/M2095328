@extends('layouts.appdash')
@section('content') 



<div class="container">
<table class="table table-striped table-hover">
<thead>
      <tr>
      <th>@lang('lang.title')</th> 
      <th>@lang('lang.link')</th> 
      <th>Date</th> 

      </tr>
    </thead>
      
    <tbody>
        @forelse($docs as $doc)
          
       
            
        <tr>
            <td>{{$doc->title}}</td> 
            <td><a href="{{$doc->file_path}}">{{$doc->name}} </a></td> 
            <td>{{$doc->date_added}}</td> 

            @if($doc->user_id == $user_id)
            <td><a class="active btn btn-small " href="document/{{$doc->id}}/edit"><i class="fas fa-edit"></i></a> </td>
            <td><form action="{{route('doc.destroy', $doc->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" title="delete" style="border: none; background-color:transparent;">
                <i class="fas fa-trash-alt"></i>
                    </button>    
                </form>
            </td>
            
            @endif
        
        
        </tr>    
            @empty
            <h3>Pas de documents</h3>
       @endforelse
    </tbody>
</table>
 
</div>      
@endsection