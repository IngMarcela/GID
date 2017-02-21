@extends('layout.principal')
@stop
@section('asig')
BUSCAR OTROSI
@stop
@section('content')
	{!!Form::open(['class' => 'form-horizontal','url'=>'actainicial'])!!} 
	<div class="row">
 		<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de caja -->	
			{!!Form::label('Estante', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- Fcaja de texto -->	
				{!!Form::text('estante',null,['class'=>'form-control','placeholder'=>'No de estante'])!!}
			</div>	
		</div>
    </div> 
  		<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de caja -->	
			{!!Form::label('Caja', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- Fcaja de texto -->	
				{!!Form::text('caja',null,['class'=>'form-control','placeholder'=>'No de caja'])!!}
			</div>	
		</div>
    </div>  
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de carpeta -->	
				{!!Form::label('Carpeta', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('carpeta',null,['class'=>'form-control','placeholder'=>'No de carpeta'])!!}
			</div>	
		</div>
    </div>      
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de No contrato -->	
				{!!Form::label('No Otrosi', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('otrosi',null,['class'=>'form-control','placeholder'=>'No de otrosi'])!!}
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
				{!!Form::label('Tipo/contratante', null, array('class' => 'control-label'))!!}
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
   			<div class="col-xs-2"><!-- estado del contrato -->	
				{!!Form::label('Estado/Contrato', null, array('class' => 'control-label'))!!}	
			</div>
			<div class="col-xs-2"><!-- opciones en el valor del estado del contrato -->	
				{!!Form::select('estco',['Ejectado', 'No ejecutado'],null,['class' => 'form-control','id' => 'estado'])!!}
			</div>	
		</div>
    </div> 
    </div> 
    <div class="row">
   		<div class="col-xs-6 col-sm-6 portfolio-item branded folio">
   			<div class="form-group"> 		
   			<div class="col-xs-2"><!-- comentario -->
				{!!Form::label('Objeto',null, array('class' => 'control-label'))!!}
			</div>
			<div class="col-xs-7"><!-- Caja de texto -->
				{!!Form::textarea('obje',null,['class'=>'form-control-3','placeholder'=>'Ingresa el objeto del proyecto','size' => '30x7', 'Style' => 'width: 316px; height: 123px;'])!!}
			</div>	
		</div>
    </div> 
	</div>  
	<div class="col-sm-12 text-center">	
		{!!Form::submit('BUSCAR',['class'=>'btn btn-primary'])!!}		 
	</div>

	{!!Form::close()!!}	
@stop

