@extends('layout.menulateral')
@stop
@section('asig')
AGREGAR CONTRATO
<p>ARCHIVOS EXTRAS</p>
@stop
@section('act7')
active
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','url'=>'contratos'])!!}
	<div class="row">
 	<div class="pane">
  	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('estante',null,['class'=>'form-control-3','placeholder'=>'No del estante'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('caja',null,['class'=>'form-control-3','placeholder'=>'No de la caja'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('carpeta',null,['class'=>'form-control-3','placeholder'=>'No del folder'])!!}
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Folios', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('folios',null,['class'=>'form-control-3','placeholder'=>'No de folios'])!!}
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('No Acta', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('no acta',null,['class'=>'form-control-3','placeholder'=>'No factura'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Detalle', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Detalle',null,['class'=>'form-control-3','placeholder'=>'Detalle'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Observacion', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('observacion',null,['class'=>'form-control-3','placeholder'=>'Observacion'])!!}
				</div>	
			</div>
    	</div>
    </div>    
   	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('PDF', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::file('pdf',null,['class'=>'form-control-3'])!!}
				</div>	
			</div>
    	</div>
    </div>  
	</div>
	<div class="col-sm-12 text-center"><!-- Caja de texto -->
		{!!Form::submit('GUARDAR',['class'=>'btn btn-primary'])!!}
	</div>
	</div> 
    
   	
	
@stop

