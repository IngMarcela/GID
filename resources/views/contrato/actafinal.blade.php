@extends('layout.principal')
@stop
@section('asig')
AGREGAR CONTRATO
<p>ACTA INICIAL</p>
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','url'=>'archivos'])!!}
	<table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Detalle</th>
        <th>Valor final</th>
        <th>Fecha de firma</th>       
        <th>PDF</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::text('no',null,['class'=>'form-control','placeholder'=>'No'])!!}</td>
        <td>{!!Form::text('actai1',null,['class'=>'form-control','placeholder'=>'Acta Inicial'])!!}</td>
        <td>{!!Form::number('valor',null,['class'=>'form-control','placeholder'=>'valor'])!!}</td></td>        
        <td>{!!Form::date('valor',null,['class'=>'form-control','placeholder'=>'fecha de firma'])!!}</td>
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

