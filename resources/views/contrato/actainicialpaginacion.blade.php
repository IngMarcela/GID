@extends('layout.menulateral_buscar')
@stop
@section('asig')
CONTRATO
<p>ACTA INICIAL</p>
@stop
@section('act1')
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
				<th>Fecha Firma</th>
				<th>Observación</th>				
				<th>Acciones</th>
			</thead>
			
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			@foreach($acta_inicial as $acta)
			<tbody>
				<th>{{$acta -> detalle}}</th>
				<th>{{$acta -> valor}}</th>
				<th>{{$acta -> fecha}}</th>
				<th>{{$acta -> observacion}}</th>
				<th class="centro"><a href="{{ route('actainicial.show', $acta->id) }}">Ver<img src="/images/ver.png"></a></th>				
			</tbody>
			
			@endforeach
		</table>
	</div>	
	
	{!!$acta_inicial->render()!!}
		<!-- Contiene el listado de todos los usuarios -->
	</div>
  	</div>
   
    
		
	
	
	
	
@stop

