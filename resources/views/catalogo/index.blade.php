@extends('layouts.app')
@section('content')
<div class="container">

@if(Session::has('mensaje'))
{{ Session::get('mensaje')}}
@endif


<a href="{{url('catalogo/create') }}">  Registrar nuevo producto de catalogo</a>
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Foto</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach( $catalogos as $catalogo)
        <tr>
            <td>{{ $catalogo->id}}</td>
            
            <td>{{ $catalogo->Nombre}}</td>
            <td>
                <img src="{{ asset('storage').'/'.$catalogo->Foto}}" width="100" alt="">
                
            </td>
            <td>
                
            <a href="{{ url('/catalogo/'.$catalogo->id.'/edit')}}">
                      Editar  



            </a>
            
            
            

<form action="{{ url('/catalogo/'.$catalogo->id) }}" method="post">
    @csrf
    {{ method_field('DELETE')}}
<input type="submit" onclick="return confirm('¿Quieres borrar?')" 
value="Borrar">
</form>

            </td>
            
        </tr>
        @endforeach

    </tbody>
</table>
</div>
@endsection