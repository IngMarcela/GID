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
@include('alertas.request')
@include('alertas.confirmacion')

	{!!Form::open(['class' => 'form-horizontal','route' => 'archivo.store','method' => 'POST','files' => true ,'name' => 'form_principal', 'id' => 'form_principal'])!!}
	

	{!!Form::hidden('id',$id_contrato)!!}
		
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
    		<div class="form-group">
				{!!Form::label('Detalle', null, array('class' => 'control-label col-xs-3'))!!}	
				{!!Form::label('*', null, array('class' => 'control-label col-xs-1'))!!}	
				<div class="col-xs-3">	
					{!!Form::text('Detalle',null,['class'=>'form-control-3','placeholder'=>'Detalle'])!!}
				</div>	
			</div>
    	</div>
    </div>  
        
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('PDF', null, array('class' => 'control-label col-xs-3','acept'=>'application/pdf'))!!}	
				{!!Form::label('*', null, array('class' => 'control-label col-xs-1'))!!}	
				<div class="col-xs-3">	
					{!!Form::file('PDF',null,['class'=>'form-control-3'])!!}
				</div>	
			</div>
    	</div>
    </div>  
	</div>
	<div class="row">
 	<div class="pane">    
    <div class="portfolio-items">

			{!!Form::label('Observacion',null, array('class' => 'control-label col-xs-3'))!!}
		
			{!!Form::textarea('Observacion',null,['class'=>'form-control','placeholder'=>'Ingresa los comentarios del proyecto','size' => '30x5', 'Style' => 'width: 75%; height: 123px;'])!!}
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

