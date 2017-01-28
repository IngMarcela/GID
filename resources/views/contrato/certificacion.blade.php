@extends('layout.principal')
@stop
@section('asig')
AGREGAR CONTRATO
<p>CERTIFICACION</p>
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','url'=>'actaparcial'])!!}
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Entidad que certifica</th>
        <th>Fecha de expedicion</th>
        <th>Entregado Por</th> 
        <th>PDF</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::text('entidad',null,['class'=>'form-control','placeholder'=>'No'])!!}</td>
        <td>{!!Form::text('fechaEx',null,['class'=>'form-control','placeholder'=>'Acta Inicial'])!!}</td>
        <td>{!!Form::number('entregado',null,['class'=>'form-control','placeholder'=>'valor'])!!}</td></td>
        <td>{!! Form::file('actai2') !!}</td>
      </tr>
    </tbody>
  </table>
	</div>
	<div class="col-sm-12 text-center">	
		{!!Form::submit('SIGUIENTE',['class'=>'btn btn-primary'])!!}		 
	</div>	
	{!!Form::close()!!}		 
@stop

