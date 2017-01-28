@extends('layout.principal')
@stop
@section('asig')
AGREGAR CONTRATO
<p>ACTA PARCIAL</p>
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','url'=>'actafinal'])!!}
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Detalle</th>     
        <th>PDF</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::text('actap1',null,['class'=>'form-control','placeholder'=>'Acta Parcial'])!!}</td>
        <td>{!! Form::file('actap2') !!}</td>
      </tr>
    </tbody>
  </table>
	</div>
	<div class="col-sm-12 text-center">	
		{!!Form::submit('SIGUIENTE',['class'=>'btn btn-primary'])!!}		 
	</div>	
	{!!Form::close()!!}		 
@stop

