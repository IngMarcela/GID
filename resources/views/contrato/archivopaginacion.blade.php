@extends('layout.menulateral_buscar')
@stop
@section('asig')
CONTRATO
<p>ARCHIVOS EXTRAS</p>
@stop
@section('act7')
active
@stop
@section('content')

	
	<div class="form-horizontal">
	<div class="row">
	<div class="users">
		<table class="table">
		<!--divicion de la tabla -->
			<thead>
				<th>Detalle</th>
				<th>Observación</th>				
				<th>Acciones</th>	
			</thead>
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			@foreach($archivos as $archivo)
			<tbody>
				<th>{{$archivo -> detalle}}</th>
				<th>{{$archivo -> observacion}}</th>
				<th class="centro"><a href="{{ route('archivo.show', $archivo->id) }}">Ver<img src="/images/ver.png"></a></th>			
				
			</tbody>
			
			@endforeach
		</table>
	</div>	
	
	{!!$archivos->render()!!}	
		<!-- Contiene el listado de todos los usuarios -->
	</div>
  	</div>
	
@stop
	

