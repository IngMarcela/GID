@extends('layout.menulateral')
@stop
@section('asig')
AGREGAR CONTRATO
<p>FACTURA</p>
@stop
@section('act6')
active
@stop
@section('content')
@include('alertas.request')
	{!!Form::open(['class' => 'form-horizontal','route' => 'factura.store','method' => 'POST'])!!}
	<div class="row">
 	<div class="pane">
 	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('No Factura', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('entidad que certifica',null,['class'=>'form-control-3','placeholder'=>'No factura'])!!}
				</div>	
			</div>
    	</div>
    </div>
  	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3','id' => 'estante'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->		{!!Form::select('Estante',$estantes ,2,['class' => 'form-control-3','id' => 'estante','onchange' => 'ventana(this.value,"estantes");',])!!}</h2>		
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de caja -->
					{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}
					<div class="col-xs-3"><!-- opciones en el valor de cajas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->	
						{!!Form::select('Caja',$cajas ,2,['class' => 'form-control-3','id' => 'caja','onchange' => 'ventana(this.value,"cajas");',])!!}</h2>
					</div>	
				</div>    	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpetas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->	
						{!!Form::select('Carpeta',$carpetas ,2,['class' => 'form-control-3','id' => 'carpeta','onchange' => 'ventana(this.value,"carpetas");',])!!}</h2>
					</div>	
				</div>
	    	</div>
	    </div>	 	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('folio inicial', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpetas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->
						{!!Form::text('folio_inicial',null,['class'=>'form-control-3','placeholder'=>'folio inicial'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('folio final', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpetas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->
						{!!Form::text('folio_final',null,['class'=>'form-control-3','placeholder'=>'folio final'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    
	
   	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Empresa', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Empresa',null,['class'=>'form-control-3','placeholder'=>'No Empresa'])!!}
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
				{!!Form::label('Valor Total', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('valor total',null,['class'=>'form-control-3','placeholder'=>'Valor total'])!!}
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
    {!!Form::close()!!}		 
@stop

