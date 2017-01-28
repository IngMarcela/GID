@extends('layout.principal')
@stop
@section('asig')
AGREGAR CONTRATO
<p>ACTA INICIAL</p>
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','url'=>'actaparcial'])!!}
	<table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Detalle</th>
        <th>Valor</th>
        <th>Fecha de firma</th>        
        <th>Fecha de vencimiento</th> 
        <th>PDF</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>{!!Form::text('no',null,['class'=>'form-control','placeholder'=>'No'])!!}</td>
        <td>{!!Form::text('actai1',null,['class'=>'form-control','placeholder'=>'Acta Inicial'])!!}</td>
        <td>{!!Form::number('valor',null,['class'=>'form-control','placeholder'=>'valor'])!!}</td></td>        
        <td>{!!Form::date('valor',null,['class'=>'form-control','placeholder'=>'fecha de firma'])!!}</td>
        <td>{!!Form::date('valor',null,['class'=>'form-control','placeholder'=>'fecha de vencimiento'])!!}</td>
        <td>{!! Form::file('actai2') !!}</td>
      </tr>
    </tbody>
  </table>
	</div>
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('Dirigir', null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-2">
					{!!Form::select('estco',['Actas Iniciales', 'Actas parciales' , 'Archivos Extras', 'Certificaciones'],null,['class' => 'form-control','id' => 'estado'])!!}
				</div>	
			</div>
    	</div>
    </div>	
	{!!Form::close()!!}		
@stop

