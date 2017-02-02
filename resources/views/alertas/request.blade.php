<!-- esta plinatilla se encarga de captura si el request retorno o no algun error y de ser el caso 
	imprime los errores que el request retorno -->
@if(count($errors)>0)
	<div class="alert alert-danger alert-dismissible" role="alert">
		<button type="button" class="close" data-dismiss="alert" aria-label="Close" 
			<span aria-hidden="true"> $times; 
			</span>
		</button>
		<ul>
			@foreach($errors->all() as $error)
				<li>
					{!!$error!!}
				</li>
			@endforeach
		</ul>
		
	</div>
@endif
