@extends('layout.menulateral_buscar')
@stop
@section('asig')
CONTRATO
<p>ACTA FINAL</p>
@stop
@section('act3')
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
				<th>Valor</th>			
				<th>Observación</th>				
				<th>Acciones</th>
			</thead>
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			@foreach($acta_final as $acta)
			<tbody>
				<th>{{$acta -> detalle}}</th>			
				<th>{{$acta -> valor}}</th>
				<th>{{$acta -> observacion}}</th>
				<th class="centro"><a href="{{ route('actafinal.show', $acta->id) }}"><img src="/images/ver.png"></a></th>				
			</tbody>
			@endforeach
		</table>
	</div>
	
	{!!$acta_final->render()!!}	
		<!-- Contiene el listado de todos los usuarios -->
	</div>
	
  	</div>
	
		 
@stop

