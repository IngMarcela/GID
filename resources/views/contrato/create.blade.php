@extends('layout.principal')
@stop
@section('asig')
AGREGAR CONTRATO
@stop
@section('content')
<!-- formulario -->
	{!!Form::open(['class' => 'form-horizontal','url'=>'actainicial'])!!}
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de caja -->
				{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}
				<div class="col-xs-3"><!-- Fcaja de texto -->	
					{!!Form::text('caja',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>    	
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('carpeta',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>
    	</div>
    </div>
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de No contrato -->
				{!!Form::label('No Contrato', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('numco',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
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
					{!!Form::select('estco',$estados,null,['class' => 'form-control','id' => 'estado'])!!}
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
					{!!Form::select('tipco',$tipo_contratos,null,['class' => 'form-control'])!!}
				</div>	
			</div>	
    	</div>
    </div>	 
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label de la fecha en que se firma el contrato -->
				{!!Form::label('Fecha de Inicio',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- un panel con el calendario -->
					{!!Form::date('fedin',null,['class'=>'form-control'])!!}
				</div>
			</div>	
    	</div>
    </div>	 
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label del objeto -->
			{!!Form::label('Objeto',null, array('class' => 'control-label col-xs-3'))!!}
			<div class="col-xs-3"><!-- caja de texto, pero con gran espacio -->
				{!!Form::textarea('objet',null,['class'=>'form-control','placeholder'=>'Ingresa el Objeto del Contrato','size' => '20x5'])!!}
			</div>
			</div>	
    	</div>
    </div>	    
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label de Departamento -->
				{!!Form::label('Departamento',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					<!-- variable $departamentos es enviada desde el controlador ContratoController@create -->
					{!!Form::select('depar',$departamentos,null,['class' => 'form-control','id' => 'departamento'])!!}
				</div>	
			</div>	
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- Municipio -->
				{!!Form::label('Municipio/Vereda',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::select('munve',['Selecciona'] ,null,['class' => 'form-control','id' => 'municipio'])!!}</h2>
				</div>				
					
			</div>	
    	</div>
    </div>     
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- valor en que se firmo el contrato -->
				{!!Form::label('Valor Presupuestado',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::number('valpr',null,['class'=>'form-control','placeholder'=>'Ingresa el valor total'])!!}
				</div>
			</div>	
    	</div>
    </div>    
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- valor en que se finalizo -->
				{!!Form::label('Valor ejecutada',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::number('valej',null,['class'=>'form-control','placeholder'=>'Ingresa el valor ejecutada'])!!}
				</div>
			</div>	
    	</div>
    </div>   
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label del contratante -->
				{!!Form::label('contratante',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::text('contr',null,['class'=>'form-control','placeholder'=>'Ingresa el Contratante'])!!}
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
					{!!Form::select('tipte',$tipo_contratantes,null,['class' => 'form-control'])!!}
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
					{!!Form::select('conas',$contratistas,null,['class' => 'form-control'])!!}
				</div>
			</div>	
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- la opcion del rut -->
				{!!Form::label('RUP', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('rup',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">><!-- comentario -->
			{!!Form::label('Comentario',null, array('class' => 'control-label col-xs-3'))!!}
			<div class="col-xs-3"><!-- Caja de texto -->
				{!!Form::textarea('comen',null,['class'=>'form-control','placeholder'=>'Ingresa los comentarios del proyecto','size' => '30x5'])!!}
			</div>	
			</div>
    	</div>
    </div>
    <h2><a href="javascript:openVentana();">otros</a></h2>
    @section('boton')
	<div class="timeline-date text-center">	
		{!!Form::submit('GUARDAR',['class'=>'btn btn-primary'])!!}		 
	</div>
	@stop
	{!!Form::close()!!}	
@stop
@Section('modal')
	<div class=ventana><!-- ventana modal, que se despliega para agregar la opcion de agregar otra vereda o municipio -->
		{!!Form::open(['url'=>'actainicial'])!!}
		<div class="formu">
		<div class="cerrar"><a href="javascript:closeVentana();">Cerrar X</a></div>
			<div class="form-group"><!-- label de diferente vereda o monicipio -->
				{!!Form::label('Vereda', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Vereda',null,['class'=>'form-control','placeholder'=>'Vereda'])!!}
				</div>	
				<div class="timeline-date text-center">	
					{!!Form::submit('GUARDAR',['class'=>'btn btn-primary'])!!}		 
				</div>
			</div>
		</div>
		{!!Form::close()!!}	
	</div>
@stop

