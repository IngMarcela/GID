@extends('layout.principal')
@stop
@section('asig')
CONTRATOS
@stop
@section('content')
<div class="col-sm-12 text-center">
	<input type="button" onclick=" location.href='/contrato/create' " value="AGREGAR CONTRATO" class="btn btn-lg btn-primary" /> 
</br>
</br>
	<input type="button" onclick=" location.href='/contrato/buscar' " value="BUSCAR CONTRATO" class="btn btn-lg btn-primary" /> 
</br>
</br>
	<input type="button" onclick=" location.href='/buscar_sin_rup' " value="CONTRATOS NO INGRESADOS EN EL RUP" class="btn btn-lg btn-primary" /> 
</div>
@stop
