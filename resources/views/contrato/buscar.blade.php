@extends('layout.principal')
@stop
@section('asig')
BUSCAR CONTRATO
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
				{!!Form::textarea('objeto',null,['class'=>'form-control-3','placeholder'=>'Ingresa los objetos del proyecto','size' => '30x7', 'Style' => 'width: 500px; height: 123px;'])!!}
			</div>	
		</div>
    </div>   
	</div>  
	<div class="col-sm-12 text-center">	
		{!!Form::submit('BUSCAR',['class'=>'btn btn-primary'])!!}		 
	</div>
	
	<div class="row">
	<div class="users">
		<table class="table">
		<!--divicion de la tabla -->
			<thead>
				<th>Estante</th>
				<th>Caja</th>
				<th>Carpeta</th>
				<th>No Contrato</th>
				<th>Municipio</th>
				<th>Valor_ejecutado</th>
				<th>Estado</th>
				<th>Contratante</th>
				<th>Contratista</th>
			</thead>
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			@foreach($Contratos as $Contrato)
			<tbody>
			<!--muestra la informacion de cada tabla del modelo user-->
			<!--información que llega la columna de name contenido en el modelo user-->
				<th>{{$Contrato -> id}}</th>
				<!--información que llega la columna de email contenido en el modelo user-->
				<th>{{$Contrato -> id_caja}}</th>
				<th>{{$Contrato -> id_carpeta}}</th>
				<th>{{$Contrato -> id}}</th>
				<th>{{$Contrato -> id_municipio}}</th>
				<th>{{$Contrato -> valor_ejecutado}}</th>
				<th>{{$Contrato -> id_estado}}</th>
				<th>{{$Contrato -> id_contratante}}</th>
				<th>{{$Contrato -> id_contratista}}</th>
				
			</tbody>
			@endforeach
		</table>
	</div>	
	{!!$Contratos->render()!!}
		<!-- Contiene el listado de todos los usuarios -->
	</div>
	{!!Form::close()!!}	
@stop

	@section('scripts')
		{!!Html::script('js/script3.js')!!}
		
	@endsection
