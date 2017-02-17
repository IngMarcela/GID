@extends('layout.principal')
@stop
@section('asig')
CONTRATOS
@stop
@section('content')
<div class="col-sm-12 text-center">
	<input type="button" onclick=" location.href='contratos/create' " value="AGREGAR CONTRATO" class="btn btn-lg btn-primary" /> 
</br>
</br>
	<input type="button" onclick=" location.href='buscar' " value="BUSCAR CONTRATO" class="btn btn-lg btn-primary" /> 
</div>
@stop
