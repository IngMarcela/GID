<!-- esta plinatilla se encarga de captura si desde algun metodo del controlador se envia algun mensaje o no 
	 y de ser el caso imprime el mensaje que el se envio -->
@if(Session::has('message'))
	<div class="alert alert-success alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" 
			<span aria-hidden="true"> CERRAR 
			</span>
		</button>
		{{Session::get('message')}}
	</div>
@endif
