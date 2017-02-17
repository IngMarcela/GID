@extends('layout.principal')
@stop
@section('asig')
<a href="http://localhost:8000/documentos">DOCUMENTOS</a>
<p>HOJA DE VIDA</p>
@stop
@section('content')
<div class="col-sm-12 text-center">
	<input type="button" onclick=" location.href='hoja_vidad' " value="AGREGAR HOJA DE VIDA" class="btn btn-lg btn-primary" /> 
</br>
</br>
	<input type="button" onclick=" location.href='http://localhost:8000/buscar' " value="BUSCAR HOJA DE VIDA" class="btn btn-lg btn-primary" /> 
</div>
@stop