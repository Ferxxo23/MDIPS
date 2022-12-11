
<h1>{{ $modo}} empleados</h1>

<label for="Nombre">Nombre</label>
<input type="text" name="Nombre" value="{{isset($catalogo->Nombre)?$catalogo->Nombre:'' }}" id="Nombre">
<br>

<label for="Foto">Foto</label>
@if(isset($catalogo->Nombre))
<img src="{{ asset('storage').'/'.$catalogo->Foto}}" width="100" alt="">
@endif
<input type="file" name="Foto" value=""  id="Foto">
<br>

<input type="submit" value="{{ $modo}} datos">

<a href="{{url('catalogo/') }}">  Regresar</a>

<br>