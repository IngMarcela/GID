	<div class=ventanaCarpetas style="display: none;"><!-- ventana modal, que se despliega para agregar la opcion de agregar otra carpeta -->
			{!!Form::open(['route' => 'carpeta.store', "method" => "POST"])!!}
			<div class="formu">
			<div class="cerrar"><a href="javascript:closeVentana('carpetas');">Cerrar X</a></div>
				<div class="form-group"><!-- label de carpeta -->
					{!!Form::label('No Carpeta', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->	
						{!!Form::number('NuevaCarpeta',null,['class'=>'form-control','placeholder'=>'Ingresa el Numero'])!!}
					</div>
					<div class="col-sm-6 portfolio-item branded logos">
		    			<div class="form-group">
		    				{!!Form::label('',null, array('class' => 'control-label col-xs-3'))!!}
							<div class="col-xs-3">	
								<input type="hidden" name="NuevaCarpetaC" id="NuevaCarpetaC">
							</div>	
							{!!Form::label('',null, array('class' => 'control-label col-xs-3'))!!}
							<div class="col-xs-3">	
								<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
							</div>	
						</div>
		    		</div>	
					<div class="timeline-date text-center">	
						{!!Form::submit('Agregar',['class'=>'btn btn-primary'])!!}		 
					</div>
				</div>
			</div>
			{!!Form::close()!!}	
	</div>