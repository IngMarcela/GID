@extends('layout.principal')
@stop
@section('asig')
AGREGAR CONTRATO
@stop
@section('content')
<!-- templete request.blade.php se utiliza para mostrar mensajes de retroalimentacion al usuario-->
@include('alertas.request')

@include('alertas.confirmacion')


<!-- formulario -->
	{!!Form::open(['class' => 'form-horizontal','route' => 'contrato.store','method' => 'POST'])!!}
	
	<div class="row">  
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3">	
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>	
				</div>
	    	</div>
	    </div>	
	 </div>
	<div class="row">    
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de caja -->
					{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}
					<div class="col-xs-3"><!-- opciones en el valor de cajas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->	
						{!!Form::select('Caja',$cajas ,2,['class' => 'form-control','id' => 'caja','onchange' => 'ventana(this.value,"cajas");',])!!}</h2>
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
						{!!Form::select('Carpeta',$carpetas ,2,['class' => 'form-control','id' => 'carpeta','onchange' => 'ventana(this.value,"carpetas");',])!!}</h2>
					</div>	
				</div>
	    	</div>
	    </div>	 
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpetas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->	
						{!!Form::select('Estante',$estantes ,2,['class' => 'form-control','id' => 'estante','onchange' => 'ventana(this.value,"estantes");',])!!}</h2>
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
						{!!Form::text('folio_inicial',null,['class'=>'form-control','placeholder'=>'folio inicial'])!!}
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
						{!!Form::text('folio_final',null,['class'=>'form-control','placeholder'=>'folio final'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de No contrato -->
					{!!Form::label('No Contrato', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- caja de texto -->	
						{!!Form::text('No_Contrato',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
					</div>	
				</div>
	    	</div>
	    </div>   
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- estado del contrato -->
					{!!Form::label('Estado del Contrato', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- opciones en el valor del estado del contrato -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->
						{!!Form::select('Estado_del_Contrato',$estados,null,['class' => 'form-control','id' => 'estado'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label del tipo de contrto -->
					{!!Form::label('Tipo de Contrato', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- seleccion de opcuon del tipo de contrato -->
						<!-- variable $tipo_contratos es enviada desde el controlador ContratoController@create -->
						{!!Form::select('Tipo_de_Contrato',$tipo_contratos,null,['class' => 'form-control'])!!}
					</div>	
				</div>	
	    	</div>
	    </div>	 
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label de la fecha en que se firma el contrato -->
					{!!Form::label('Fecha de Inicio',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- un panel con el calendario -->
						{!!Form::date('Fecha_de_Inicio',null,['class'=>'form-control'])!!}
					</div>
				</div>	
	    	</div>
	    </div>	 
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label del objeto -->
				{!!Form::label('Objeto',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto, pero con gran espacio -->
					{!!Form::textarea('Objeto',null,['class'=>'form-control','placeholder'=>'Ingresa el Objeto del Contrato','size' => '20x5'])!!}
				</div>
				</div>	
	    	</div>
	    </div>	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label de Departamento -->
					{!!Form::label('Departamento',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!--  -->
						<!-- variable $departamentos es enviada desde el controlador ContratoController@create -->
						{!!Form::select('Departamento',$departamentos,null,['class' => 'form-control','id' => 'departamento'])!!}
					</div>	
				</div>	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- Municipio -->
					{!!Form::label('Municipio',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!--  -->
						{!!Form::select('Municipio',['1' => 'Selecciona'],1,['class' => 'form-control','id' => 'municipio','onchange' => 'ventana(this.value,"municipios");',])!!}</h2>
					</div>				
						
				</div>	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- vereda -->
					{!!Form::label('Vereda',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!--  -->
						{!!Form::select('Vereda',['1' => 'Selecciona'],1,['class' => 'form-control','id' => 'vereda','onchange' => 'ventana(this.value,"veredas");',])!!}</h2>
					</div>				
						
				</div>	
	    	</div>
	    </div>         
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- valor en que se firmo el contrato -->
					{!!Form::label('Valor Presupuestado',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->
						{!!Form::number('Valor_Presupuestado',null,['class'=>'form-control','placeholder'=>'Ingresa el valor total'])!!}
					</div>
				</div>	
	    	</div>
	    </div>    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- valor en que se finalizo -->
					{!!Form::label('Valor ejecutado',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->
						{!!Form::number('Valor_Ejecutado',null,['class'=>'form-control','placeholder'=>'Ingresa el valor ejecutada'])!!}
					</div>
				</div>	
	    	</div>
	    </div>   
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label del contratante -->
					{!!Form::label('contratante',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->
						{!!Form::text('Contratante',null,['class'=>'form-control','placeholder'=>'Ingresa el Contratante'])!!}
					</div>
				</div>
	    	</div>
	    </div>  
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label del tipo de contratante -->
					{!!Form::label('Tipo de contratante', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- Fseleccionar el tipo de contratante -->
						<!-- variable $tipo_contratantes es enviada desde el controlador ContratoController@create -->
						{!!Form::select('Tipo_de_Contratante',$tipo_contratantes,null,['class' => 'form-control'])!!}
					</div>	
				</div>
	    	</div>
	    </div>             
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label de contratista -->
					{!!Form::label('Contratista',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- Opciones del contratista -->
						<!-- variable $contratistas es enviada desde el controlador ContratoController@create -->
						{!!Form::select('Contratista',$contratistas,2,['class' => 'form-control','id' => 'contratista'])!!}
					</div>
				</div>	
	    	</div>
	    </div>  
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- la opcion del rut -->
					{!!Form::label('RUP', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- caja de texto -->	
						{!!Form::text('RUP',null,['class'=>'form-control','id' => 'rup','placeholder'=>'No de contrato'])!!}
					</div>	
				</div>
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">><!-- comentario -->
				{!!Form::label('Comentario',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- Caja de texto -->
					{!!Form::textarea('Comentario',null,['class'=>'form-control','placeholder'=>'Ingresa los comentarios del proyecto','size' => '30x5'])!!}
				</div>	
				</div>
	    	</div>
	    </div>
	    
    	</div>
	    
	    <div class="col-sm-12 text-center"><!-- Caja de texto -->
		{!!Form::submit('GUARDAR',['class'=>'btn btn-primary'])!!}
		</div>   
		
	{!!Form::close()!!}	
	
	
	@include('ventanas_modales.estante')
	@include('ventanas_modales.caja')
	@include('ventanas_modales.carpeta')
	@include('ventanas_modales.municipio')
	@include('ventanas_modales.vereda')
	
	
@stop



	

