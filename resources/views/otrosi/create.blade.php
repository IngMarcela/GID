@extends('layout.principal')
@stop
@section('asig')
AGREGAR OTROSI
@stop
@section('content')
<!-- formulario -->
	{!!Form::open(['class' => 'form-horizontal','url'=>'actainicial'])!!}
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de caja -->
				{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}
				<div class="col-xs-2"><!-- Fcaja de texto -->	
					{!!Form::text('caja',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>    	
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de carpeta -->
				{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-2"><!-- caja de texto -->	
					{!!Form::text('carpeta',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de No contrato -->
				{!!Form::label('No Otrosi', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-2"><!-- caja de texto -->	
					{!!Form::text('numotro',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>
    	</div>
    </div>
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de No contrato -->
				{!!Form::label('No Contrato', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-2"><!-- caja de texto -->	
					{!!Form::text('numco',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>
    	</div>
    </div>
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- estado del contrato -->
				{!!Form::label('Estado del Contrato', null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-2"><!-- opciones en el valor del estado del contrato -->
					{!!Form::select('estco',['Ejectado', 'No ejecutado'],null,['class' => 'form-control','id' => 'estado'])!!}
				</div>	
			</div>
    	</div>
    </div>	
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label del tipo de contrto -->
				{!!Form::label('Tipo de Contrato', null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-2"><!-- seleccion de opcuon del tipo de contrato -->
					{!!Form::select('tipco',['Obra','Suministro','Civil','prestacion de servicio'],null,['class' => 'form-control'])!!}
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
			<div class="form-group"><!-- label de Departamento -->
				{!!Form::label('Departamento',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::text('depar',null,['class'=>'form-control','placeholder'=>'Ingresa el Departamento'])!!}
				</div>	
			</div>	
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- Municipio -->
				{!!Form::label('Municipio/Vereda',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::text('munve',null,['class'=>'form-control','placeholder'=>'Ingresa el Departamento'])!!}
				</div>
			</div>	
    	</div>
    </div>     
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- valor en que se firmo el contrato -->
				{!!Form::label('Valor Total',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::number('valto',null,['class'=>'form-control','placeholder'=>'Ingresa el valor total'])!!}
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
				<div class="col-xs-2"><!-- Fseleccionar el tipo de contratante -->
					{!!Form::select('tipte',['Publico', 'Privado'],null,['class' => 'form-control'])!!}
				</div>	
			</div>
    	</div>
    </div>             
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label de contratista -->
				{!!Form::label('Contratista',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- Opciones del contratista -->
					{!!Form::select('conas', ['Electrosistemas del Cauca/IDJ','Terceros'],null,['class' => 'form-control'])!!}
				</div>
			</div>	
    	</div>
    </div>  
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- la opcion del rut -->
				{!!Form::label('RUT', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
				<div class="col-xs-2"><!-- caja de texto -->	
					{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label de Departamento -->
				{!!Form::label('Objeto',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::textarea('objeto',null,['class'=>'form-control','placeholder'=>'Ingresa el objeto del proyecto','size' => '30x5'])!!}
				</div>	
			</div>	
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
			<div class="form-group"><!-- label de Departamento -->
				{!!Form::label('Comentario',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->
					{!!Form::textarea('comen',null,['class'=>'form-control','placeholder'=>'Ingresa los comentarios del proyecto','size' => '30x5'])!!}
				</div>	
			</div>	
    	</div>
    </div>
	
	<div class="col-sm-12 text-center">	
		{!!Form::submit('GUARDAR',['class'=>'btn btn-primary'])!!}		 
	</div>

	{!!Form::close()!!}	
@stop

