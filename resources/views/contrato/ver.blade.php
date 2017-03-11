@extends('layout.principal')
@stop
@section('asig')
CONTRATO
@stop
@section('content')
<!-- templete request.blade.php se utiliza para mostrar mensajes de retroalimentacion al usuario-->


<!-- formulario -->
	@foreach($contrato as $c)
	
	
<div class="form-horizontal">
	<div class="row">
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de estante -->
					{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpeta Estante -->
						<!-- variable $estantes es enviada desde el controlador ContratoController@create -->	
						{!!Form::text('Estante',$c->estante,['class'=>'form-control','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	     
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de caja -->
					{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- opciones en el valor de cajas -->
						{!!Form::text('Caja',$c->caja,['class'=>'form-control','readonly' => 'true'])!!}
					</div>	
				</div>    	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpetas -->
						{!!Form::text('Carpeta',$c->carpeta,['class'=>'form-control','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	 	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('Folio Inicial', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpetas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->
						{!!Form::number('Folio_Inicial',null,['class'=>'form-control','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('Folio Final', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- opciones en el valor de carpetas -->
						<!-- variable $estados es enviada desde el controlador ContratoController@create -->
						{!!Form::number('Folio_Final',null,['class'=>'form-control','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    
		<div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- label de No contrato -->
					{!!Form::label('No Contrato', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}
					<div class="col-xs-3"><!-- caja de texto -->	
						{!!Form::text('No_Contrato',$c->num_contrato,['class'=>'form-control','readonly' => 'true'])!!}
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
					
							
						{!!Form::text('Estado_del_Contrato',$c->estado,['class'=>'form-control','readonly' => 'true'])!!}
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
					
						{!!Form::text('Tipo_de_Contrato',$c->tipo_contrato,['class'=>'form-control','readonly' => 'true'])!!}
					</div>	
				</div>	
	    	</div>
	    </div>	 
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label de la fecha en que se firma el contrato -->
					{!!Form::label('Fecha de Inicio',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- un panel con el calendario -->
						{!!Form::date('Fecha_de_Inicio',$c->fecha_inicio,['class'=>'form-control','readonly' => 'true'])!!}
					</div>
				</div>	
	    	</div>
	    </div>	 
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label del objeto -->
				{!!Form::label('Objeto',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto, pero con gran espacio -->
					{!!Form::textarea('Objeto',$c->objeto,['class'=>'form-control','size' => '20x5','readonly' => 'true'])!!}
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
					
						{!!Form::text('Departamento',$c->departamento,['class'=>'form-control','readonly' => 'true'])!!}
					</div>	
				</div>	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- Municipio -->
					{!!Form::label('Municipio',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!--  -->
					
						{!!Form::text('Municipio',$c->municipio,['class'=>'form-control','readonly' => 'true'])!!}
					</div>				
						
				</div>	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- vereda -->
					{!!Form::label('Vereda',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!--  -->
					
						{!!Form::text('Vereda',null,['class'=>'form-control','readonly' => 'true'])!!}
					</div>				
						
				</div>	
	    	</div>
	    </div>         
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- valor en que se firmo el contrato -->
					{!!Form::label('Valor Presupuestado',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->
						{!!Form::number('Valor_Presupuestado',$c->valor_presupuestado,['class'=>'form-control','readonly' => 'true'])!!}
					</div>
				</div>	
	    	</div>
	    </div>    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- valor en que se finalizo -->
					{!!Form::label('Valor Ejecutado',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->
						{!!Form::number('Valor_Ejecutado',$c->valor_ejecutado,['class'=>'form-control','readonly' => 'true'])!!}
					</div>
				</div>	
	    	</div>
	    </div>   
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label del contratante -->
					{!!Form::label('Contratante',null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->
						{!!Form::text('Contratante',$c->contratante,['class'=>'form-control','readonly' => 'true'])!!}
					</div>
				</div>
	    	</div>
	    </div>  
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
				<div class="form-group"><!-- label del tipo de contratante -->
					{!!Form::label('Tipo de Contratante', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- Fseleccionar el tipo de contratante -->
						<!-- variable $tipo_contratantes es enviada desde el controlador ContratoController@create -->
					
						{!!Form::text('Tipo_de_Contratante',$c->tipo_contratante,['class'=>'form-control','readonly' => 'true'])!!}
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
					
						{!!Form::text('Contratista',$c->contratista,['class'=>'form-control','readonly' => 'true'])!!}
					</div>
				</div>	
	    	</div>
	    </div>  
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- la opcion del rut -->
					{!!Form::label('RUP', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
					<div class="col-xs-3"><!-- caja de texto -->	
						{!!Form::text('RUP',$c->serie,['class'=>'form-control','id' => 'rup','placeholder'=>'No de contrato','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group"><!-- comentario -->
				{!!Form::label('Comentario',null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- Caja de texto -->
					{!!Form::textarea('Comentario',$c->comentario,['class'=>'form-control','placeholder'=>'Ingresa los comentarios del proyecto','size' => '30x5','readonly' => 'true'])!!}
				</div>	
				</div>
	    	</div>
	    </div>
	    
    	</div>
    	
	    <div class="col-sm-12 text-center"><!-- Caja de texto -->
		<a class="mas" href="{{ route('inicial_paginacion', $c->id) }}">Ver Más<img class="mas" src="/images/siguiente.png"></a>
		</div>  
	    @endforeach
</div>  
		
	
	
	
@stop



	

