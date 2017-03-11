@extends('layout.menulateral_buscar')
@stop
@section('asig')
CONTRATO
<p>FACTURA</p>
@stop
@section('act6')
active
@stop
@section('content')


	<div class="form-horizontal">
	<div class="row">
	<div class="users">
		<table class="table">
		<!--divicion de la tabla -->
			<thead>			
				<th>Empresa</th>
				<th>Detalle</th>
				<th>Acciones</th>	
			</thead>
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			
			@foreach($facturas as $factura)
			<tbody>
				<th>{{$factura -> empresa}}</th>
				<th>{{$factura -> detalle}}</th>
				<th class="centro"><a href="{{ route('factura.show', $factura->id) }}">Ver<img src="/images/ver.png"></a></th>			
				
			</tbody>
			
			@endforeach
		</table>
	</div>	
	
	{!!$facturas->render()!!}
		<!-- Contiene el listado de todos los usuarios -->
	</div>
 	</div>
  	
	
	
@stop
	