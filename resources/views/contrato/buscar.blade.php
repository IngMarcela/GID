@extends('layout.principal')
@stop
@section('asig')
BUSCAR CONTRATO
@stop
@section('content')

@include('alertas.request')

@include('alertas.confirmacion')

	{!!Form::open(['class' => 'form-horizontal','url'=>'actainicial'])!!} 
	<div class="row">
 		<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2">
   				{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3'))!!}	
			</div>
			<div class="col-xs-2">	
				{!!Form::select('Estante',$estantes ,1,['class' => 'form-control','id' => 'estante','onchange' => 'ventana(this.value,"estantes",0);',])!!}</h2>
			</div>	
		</div>
    </div> 
  		<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de caja -->	
				{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3'))!!}	
			</div>
			<div class="col-xs-2"><!-- Fcaja de texto -->	
				{!!Form::select('Caja',['0' => 'Selecciona'] ,0,['class' => 'form-control','id' => 'caja','onchange' => 'ventana(this.value,"cajas",document.form_principal.Estante.value);',])!!}</h2>
			</div>	
		</div>
    </div>  
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de carpeta -->	
				{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3'))!!}		
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::select('Carpeta',['0' => 'Selecciona'] ,0,['class' => 'form-control','id' => 'carpeta','onchange' => 'ventana(this.value,"carpetas",document.form_principal.Caja.value);',])!!}</h2>
			</div>	
		</div>
    </div>      
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de carpeta -->	
				{!!Form::label('Folio Inicial', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}		
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::number('Folio_Inicial',null,['class'=>'form-control','placeholder'=>'folio inicial'])!!}
			</div>	
		</div>
    </div> 
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de carpeta -->	
				{!!Form::label('Folio Final', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				<!-- opciones en el valor de carpetas -->
				<!-- variable $estados es enviada desde el controlador ContratoController@create -->
				{!!Form::number('Folio_Final',null,['class'=>'form-control','placeholder'=>'folio final'])!!}
			</div>	
		</div>
    </div> 
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de No contrato -->	
				{!!Form::label('No Contrato', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('No_Contrato',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
			</div>	
		</div>
    </div>        

	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de la fecha en que se firma el contrato -->	
				{!!Form::label('Fecha de Inicio',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- un panel con el calendario -->	{!!Form::date('Fecha_de_Inicio',null,['class'=>'form-control'])!!}
			</div>	
		</div>
    </div>
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de Departamento -->	
				{!!Form::label('Departamento',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::select('Departamento',$departamentos,null,['class' => 'form-control','id' => 'departamento'])!!}
			</div>	
		</div>
    </div>
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- Municipio -->	
				{!!Form::label('Municipio',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::select('Municipio',['0' => 'Selecciona'],0,['class' => 'form-control','id' => 'municipio','onchange' => 'ventana(this.value,"municipios",document.form_principal.Departamento.value);',])!!}</h2>
			</div>	
		</div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- valor en que se firmo el contrato -->	
				{!!Form::label('Valor Presupuestado',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::number('Valor_Presupuestado',null,['class'=>'form-control','placeholder'=>'Ingresa el valor total'])!!}
			</div>	
		</div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- valor en que se finalizo -->	
				{!!Form::label('Valor Ejecutado',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::number('Valor_Ejecutado',null,['class'=>'form-control','placeholder'=>'Ingresa el valor ejecutada'])!!}
			</div>	
		</div>
    </div>
     <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label del contratante -->	
				{!!Form::label('Contratante',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('Contratante',null,['class'=>'form-control','placeholder'=>'Ingresa el Contratante'])!!}
			</div>	
		</div>
    </div>  
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label del tipo de contratante -->	
				{!!Form::label('Tipo de Contratante', null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- Fseleccionar el tipo de contratante -->	
				{!!Form::select('Tipo_de_Contratante',$tipo_contratantes,null,['class' => 'form-control'])!!}
			</div>	
		</div>
    </div>  
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label del tipo de contratatista -->	
				{!!Form::label('Contratista',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- Fseleccionar el contratista -->	
				{!!Form::select('Contratista',$contratistas,2,['class' => 'form-control','id' => 'contratista'])!!}
			</div>	
		</div>
    </div>  
    <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- la opcion del rut -->	
				{!!Form::label('RUP', null, array('class' => 'control-label col-xs-3','id' => 'contrato'))!!}
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('RUP',null,['class'=>'form-control','id' => 'rup','placeholder'=>'No de contrato'])!!}
			</div>	
		</div>
    </div>    
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- estado del contrato -->	
				{!!Form::label('Tipo de Contratante', null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-2"><!-- opciones en el valor del estado del contrato -->									{!!Form::select('Tipo_de_Contratante',$tipo_contratantes,null,['class' => 'form-control'])!!}
			</div>	
		</div>
    </div> 
    </div> 
    <div class="row">
    <div class="col-xs-6 col-sm-6 portfolio-item branded folio">
   			<div class="form-group"> 		
   			<div class="col-xs-2"><!-- comentario -->
				{!!Form::label('Objeto',null, array('class' => 'control-label col-xs-3'))!!}
			</div>
			<div class="col-xs-7"><!-- Caja de texto -->
				{!!Form::textarea('Objeto',null,['class'=>'form-control','placeholder'=>'Ingresa el Objeto del Contrato','size' => '30x7', 'Style' => 'width: 500px; height: 123px;'])!!}
			</div>	
		</div>
    </div>   
	</div>  
	<div class="col-sm-12 text-center">	
		{!!Form::submit('Buscar',['class'=>'btn btn-primary'])!!}		 
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
