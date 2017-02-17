@extends('layout.menulateral')
@stop
@section('asig')
AGREGAR CONTRATO
<p>ACTA INICIAL</p>
@stop
@section('act1')
active
@stop
@section('content')
@include('alertas.request')
	{!!Form::open(['class' => 'form-horizontal','route' => 'actainicial.store','method' => 'POST'])!!}
	<div class="row">
 	<div class="pane">
  	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3','id' => 'estante'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->					
					{!!Form::select('Estante',['', ''],null,['class' => 'form-control-3','id' => 'estante'])!!}				
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3','id' => 'caja'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->					
					{!!Form::select('caja',['', ''],null,['class' => 'form-control-3','id' => 'caja'])!!}	
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Carpetas', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->					
					{!!Form::select('carpeta',['', ''],null,['class' => 'form-control-3','id' => 'carpeta'])!!}	
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Folios', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::number('folios',null,['class'=>'form-control-3','placeholder'=>'No de folios'])!!}
				</div>	
			</div>
    	</div>
    </div> 
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('No Acta', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('no acta',null,['class'=>'form-control-3','placeholder'=>'No'])!!}
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Detalle', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('detalle',null,['class'=>'form-control-3','placeholder'=>'Detalle'])!!}
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Valor', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('valor',null,['class'=>'form-control-3','placeholder'=>'$0.0'])!!}
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Fecha de firma', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::date('fecha_firma',null,['class'=>'form-control-3'])!!}
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Fecha de vencimiento', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::date('fecha_vencimiento',null,['class'=>'form-control-3'])!!}
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
    <div class="row">
 	<div class="pane">    
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- comentario -->
			{!!Form::label('Observacion',null, array('class' => 'control-label col-xs-3'))!!}
			<div class="col-xs-3"><!-- Caja de texto -->
				{!!Form::textarea('observacion',null,['class'=>'form-control','placeholder'=>'Ingresa los comentarios del proyecto','size' => '30x5'])!!}
			</div>	
			</div>
    	</div>
    </div>
    </div>
	</div>
	<div class="col-sm-12 text-center"><!-- Caja de texto -->
		{!!Form::submit('GUARDAR',['class'=>'btn btn-primary'])!!}
	</div>
	</div>
	<!--<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('Dirigir', null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-2">
					{!!Form::select('estco',['Actas Iniciales', 'Actas parciales' , 'Archivos Extras', 'Certificaciones'],null,['class' => 'form-control','id' => 'estado'])!!}
				</div>	
			</div>
    	</div>
    </div>-->	
	{!!Form::close()!!}		
@stop

