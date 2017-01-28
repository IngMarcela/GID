@extends('layout.principal')
@stop
@section('asig')
AGREGAR CONTRATO
<p>ARCHIVOS EXTRAS</p>
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','route'=>'contrato.store','method'=>'POST'])!!}
	<table class="table table-striped">
    <thead>
      <tr>
        <th>Detalle</th>     
        <th>PDF</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::text('archivo',null,['class'=>'form-control','placeholder'=>'Acta Parcial'])!!}</td>
        <td>{!! Form::file('archivo') !!}</td>
      </tr>
    </tbody>
  </table>
	</div>
	<div class="col-sm-12 text-center">	
		{!!Form::submit('GUARDAR',['class'=>'btn btn-primary'])!!} 
	</div>	
	
	{!!Form::close()!!}		
		{!!Form::open(['class' => 'form-horizontal','route'=>'contrato.store','method'=>'POST'])!!}

	<div class="col-sm-12 text-right">	
		{!!Form::submit('ATRAS',['class'=>'btn btn-primary'])!!} 
	</div>	
	{!!Form::close()!!}	 
@stop

