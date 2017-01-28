@extends('layout.principal')
@stop
@section('asig')
BUSCAR CONTRATO
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','url'=>'actainicial'])!!} 
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de caja -->	
			{!!Form::label('Caja', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- Fcaja de texto -->	
				{!!Form::text('caja',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
			</div>	
		</div>
    </div>  
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de carpeta -->	
				{!!Form::label('Carpeta', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('carpeta',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
			</div>	
		</div>
    </div>      
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de No contrato -->	
				{!!Form::label('No Contrato', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('carpeta',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
			</div>	
		</div>
    </div>        

	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de la fecha en que se firma el contrato -->	
				{!!Form::label('Fecha Inicio',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- un panel con el calendario -->	
				{!!Form::date('fedin',null,['class'=>'form-control'])!!}
			</div>	
		</div>
    </div>
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de Departamento -->	
				{!!Form::label('Departamento',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('depar',null,['class'=>'form-control','placeholder'=>'Ingresa el Departamento'])!!}
			</div>	
		</div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- Municipio -->	
				{!!Form::label('Municipio',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('munve',null,['class'=>'form-control','placeholder'=>'Municipio/Vereda'])!!}
			</div>	
		</div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- valor en que se firmo el contrato -->	
				{!!Form::label('V/Total',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::number('valto',null,['class'=>'form-control','placeholder'=>'Ingresa el valor total'])!!}
			</div>	
		</div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- valor en que se finalizo -->	
				{!!Form::label('V/ejecutada',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::number('valej',null,['class'=>'form-control','placeholder'=>'Ingresa el valor ejecutada'])!!}
			</div>	
		</div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label del contratante -->	
				{!!Form::label('contratante',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('contr',null,['class'=>'form-control','placeholder'=>'Ingresa el Contratante'])!!}
			</div>	
		</div>
    </div>  
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label del tipo de contratante -->	
				{!!Form::label('Tipo de contratante', null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- Fseleccionar el tipo de contratante -->	
				{!!Form::select('tipte',['Publico', 'Privado'],null,['class' => 'form-control'])!!}
			</div>	
		</div>
    </div>  
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label del tipo de contratatista -->	
				{!!Form::label('Contratista',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-2"><!-- Fseleccionar el contratista -->	
				{!!Form::select('conas', ['Electrosistemas/IDJ','Terceros'],null,['class' => 'form-control'])!!}
			</div>	
		</div>
    </div>  
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- la opcion del rut -->	
				{!!Form::label('RUT', null, array('class' => 'control-label','id' => 'contrato'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('rut',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
			</div>	
		</div>
    </div>    
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- estado del contrato -->	
				{!!Form::label('Estado del Contrato', null, array('class' => 'control-label'))!!}	
			</div>
			<div class="col-xs-2"><!-- opciones en el valor del estado del contrato -->	
				{!!Form::select('estco',['Ejectado', 'No ejecutado'],null,['class' => 'form-control','id' => 'estado'])!!}
			</div>	
		</div>
    </div> 
	<div class="col-sm-12 text-center">	 		
   			<div class="col-xs-2"><!-- comentario -->
				{!!Form::label('Comentario',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-7"><!-- Caja de texto -->
				{!!Form::textarea('comen',null,['class'=>'form-control','placeholder'=>'Ingresa los comentarios del proyecto','size' => '30x2'])!!}
			</div>
	</div> 
	<div class="col-sm-12 text-center">	 		
   			<div class="col-xs-2"><!-- label del objeto -->	 
				{!!Form::label('Objeto',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-7"><!-- caja de texto, pero con gran espacio -->
				{!!Form::textarea('objet',null,['class'=>'form-control','placeholder'=>'Ingresa el Objeto del Contrato','size' => '30x2'])!!}
			</div>
		</div>
	</div>   
	<div class="col-sm-12 text-center">	
		{!!Form::submit('BUSCAR',['class'=>'btn btn-primary'])!!}		 
	</div>

	{!!Form::close()!!}	
@stop

