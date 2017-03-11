@extends('layout.menulateral_buscar')
@stop
@section('asig')
AGREGAR CONTRATO
<p>ACTA PARCIAL</p>
@stop
@section('act2')
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
			@foreach($acta_parcial as $acta)
			<tbody>
			
			
				<th>{{$acta -> detalle}}</th>
				<th>{{$acta -> observacion}}</th>
				<th class="centro"><a href="{{ route('actaparcial.show', $acta->id) }}">Ver<img src="/images/ver.png"></a></th>
				
				
				
			</tbody>
			@endforeach
	
		</table>
	</div>
		
	{!!$acta_parcial->render()!!}
		<!-- Contiene el listado de todos los usuarios -->
	</div>
  	</div>
   
    
	
	
	
	
	
	
@stop


