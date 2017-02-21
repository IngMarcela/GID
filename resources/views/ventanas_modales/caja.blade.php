	<div class=ventanaCajas style="display: none;"><!-- ventana modal, que se despliega para agregar la opcion de agregar otra caja -->
						
			{!!Form::open(['route' => 'caja.store', "method" => "POST"])!!}
			<div class="formu">
			<div class="cerrar"><a href="javascript:closeVentana('cajas');">Cerrar X</a></div>
				
				
				<div class="form-group"><!-- label de caja -->
					{!!Form::label('No Caja', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3"><!-- caja de texto -->	
						{!!Form::number('NuevaCaja',null,['class'=>'form-control','placeholder'=>'Ingresa el Numero','id' => 'NuevaCaja'])!!}
					</div>
					<div class="col-sm-6 portfolio-item branded logos">
		    			<div class="form-group">
		    				{!!Form::label('',null, array('class' => 'control-label col-xs-3'))!!}
							<div class="col-xs-3">	
								<input type="hidden" name="NuevaCajaE" id="NuevaCajaE">
							</div>	
							{!!Form::label('',null, array('class' => 'control-label col-xs-3'))!!}
							<div class="col-xs-3">	
								<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
							</div>	
						</div>
		    		</div>	
					<div class="timeline-date text-center">	
						{!! Form::submit('Agregar',['class'=>'btn btn-primary'])!!}		 
					</div>
				</div>
			</div>
			{!!Form::close()!!}	
	</div>