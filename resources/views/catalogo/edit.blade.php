@extends('layouts.app')
@section('content')
<div class="container">
<form action="{{url('/catalogo/'.$catalogo->id) }}" method="post"  enctype="multipart/form-data">
@csrf

{{ method_field('PATCH')}}

@include('catalogo.form',['modo'=>'editar']);

</form>
</div>
@endsection

