@extends('layout.menulateral_buscar')
@stop
@section('asig')
CONTRATO
<p>CERTIFICACION</p>
@stop
@section('act5')
active
@stop
@section('content')

	<div class="form-horizontal">
	
	<div class="row">
	<div class="users">
		<table class="table">
		<!--divicion de la tabla -->
			<thead>
				<th>Entidad que certifica</th>				
				<th>Fecha de Expedición</th>			
				<th>Acciones</th>
			</thead>
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			@foreach($certificaciones as $certificacion)
			<tbody>
				<th>{{$certificacion -> entidad}}</th>			
				<th>{{$certificacion -> fecha}}</th>
				<th class="centro"><a href="{{ route('certificacion.show', $certificacion->id) }}">Ver<img src="/images/ver.png"></a></th>					
			</tbody>
			
			@endforeach
		</table>
	</div>	
	
	{!!$certificaciones->render()!!}
		<!-- Contiene el listado de todos los usuarios -->
	</div>
  	</div>
	
@stop


	
	