@extends('layout.principal')
@stop
@section('asig')
CONTRATOS
@stop
@section('content')
<div class="col-sm-12 text-center">
	{!!Form::submit('BUSCAR',['class' => 'btn btn-lg btn-primary','url'=>'contrato.archivos'])!!}
</br>
</br>
	{!!Form::submit('AGREGAR',['class' => 'btn btn-lg btn-primary','url'=>'contrato.archivos'])!!}
</div>
@stop