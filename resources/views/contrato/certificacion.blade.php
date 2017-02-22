@extends('layout.menulateral')
@stop
@section('asig')
AGREGAR CONTRATO
<p>CERTIFICACION</p>
@stop
@section('act5')
active
@stop
@section('content')
@include('alertas.request')
@include('alertas.confirmacion')

	{!!Form::open(['class' => 'form-horizontal','route' => 'certificacion.store','method' => 'POST','files' => true ,'name' => 'form_principal', 'id' => 'form_principal'])!!}
	<div class="row">
 	<div class="pane">
  	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3">
					{!!Form::select('Estante',$estantes ,1,['class' => 'form-control-3','id' => 'estante','onchange' => 'ventana(this.value,"estantes",0);',])!!}</h2>		
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3">
						{!!Form::select('Caja',['0' => 'Selecciona'] ,0,['class' => 'form-control-3','id' => 'caja','onchange' => 'ventana(this.value,"cajas",document.form_principal.Estante.value);',])!!}</h2>
					</div>	
				</div>    	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
						{!!Form::select('Carpeta',['0' => 'Selecciona'] ,0,['class' => 'form-control-3','id' => 'carpeta','onchange' => 'ventana(this.value,"carpetas",document.form_principal.Caja.value);',])!!}</h2>
					</div>	
				</div>
	    	</div>
	    </div>	 	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('folio inicial', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
						{!!Form::number('Folio_Inicial',null,['class'=>'form-control-3','placeholder'=>'folio inicial'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('folio final', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
						{!!Form::number('Folio_Final',null,['class'=>'form-control-3','placeholder'=>'folio final'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de entidad  -->
				{!!Form::label('Enitidad que Certifica', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Entidad_que_Certifica',null,['class'=>'form-control-3','placeholder'=>'Entidad que certifica'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de fecha expedicion -->
				{!!Form::label('Fecha de Expedicion', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::date('Fecha_de_Expedicion',null,['class'=>'form-control-3'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de entregado por -->
				{!!Form::label('Entregado por', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Entregado_por',null,['class'=>'form-control-3'])!!}
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('PDF', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3">	
					{!!Form::file('PDF',null,['class'=>'form-control-3'])!!}
				</div>	
			</div>
    	</div>
    </div> 
	</div>
	<div class="col-sm-12 text-center"><!-- Caja de texto -->
		{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}
	</div>
	</div> 
    {!!Form::close()!!}	
    
	@include('ventanas_modales.estante')
	@include('ventanas_modales.caja')
	@include('ventanas_modales.carpeta')	 
@stop

