<table class="table">
		<!--divicion de la tabla -->
			<thead>
				<th>Nombre</th>
				<th>Correo</th>
				<th>Operaciones</th>
			</thead>
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			@foreach($users as $user)
			<tbody>
			<!--muestra la informacion de cada tabla del modelo user-->
			<!--información que llega la columna de name contenido en el modelo user-->
				<th>{{$user -> name}}</th>
				<!--información que llega la columna de email contenido en el modelo user-->
				<th>{{$user -> email}}</th>
				<th></th>
			</tbody>
			@endforeach
		</table>
		{!!$users->render()!!}
		