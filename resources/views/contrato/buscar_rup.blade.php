@extends('layout.principal')
@stop
@section('asig')
BUSCAR RUP
@stop
@section('content')
	
	<div class="row">    
	<div class="col-xs-6 col-sm-6 col-md-4 portfolio-item branded folio">
   		<div class="form-group">
   			<div class="col-xs-2"><!-- label de No contrato -->	
				{!!Form::label('No Contrato', null, array('class' => 'control-label','id' => 'contrato'))!!}	
			</div>
			<div class="col-xs-2"><!-- caja de texto -->	
				{!!Form::text('No_Contrato',null,['class'=>'form-control','placeholder'=>'No de contrato'])!!}
			</div>	
		</div>
    </div> 
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
				<th>Acciones</th>
			</thead>
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			@foreach($contratos as $contrato)
			<tbody>
			
			<!--muestra la informacion de cada tabla del modelo user-->
			<!--información que llega la columna de name contenido en el modelo user-->
				<th>{{$contrato -> estante}}</th>
				<!--información que llega la columna de email contenido en el modelo user-->
				<th>{{$contrato -> caja}}</th>
				<th>{{$contrato -> carpeta}}</th>
				<th>{{$contrato -> num_contrato}}</th>
				<th>{{$contrato -> municipio}}</th>
				<th>{{$contrato -> valor_ejecutado}}</th>
				<th> vacio </th>
				<th>{{$contrato -> contratante}}</th>
				<th>{{$contrato -> contratista}}</th>
				<th class="centro"><a href="{{ route('contrato.show', $contrato->id) }}">Ver<img src="/images/ver.png"></a></th>
				
				
				
			</tbody>
			@endforeach
		</table>
	</div>	
	{!!$contratos->render()!!}
		<!-- Contiene el listado de todos los usuarios -->
	</div>
	
@stop

	@section('scripts')
		{!!Html::script('js/script3.js')!!}
		
	@endsection
