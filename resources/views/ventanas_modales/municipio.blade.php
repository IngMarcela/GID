	<div class=ventanaMunicipios style="display: none;"><!-- ventana modal, que se despliega para agregar la opcion de agregar otra vereda o municipio -->
		{!!Form::open(['route' => 'municipio.store', "method" => "POST"])!!}
		<div class="formu">
		<div class="cerrar"><a href="javascript:closeVentana('municipios');">Cerrar X</a></div>
			<div class="form-group"><!-- label de vereda o municipio -->
				{!!Form::label('Municipio', null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('NuevoMunicipio',null,['class'=>'form-control','placeholder'=>'Ingrese el Nombre'])!!}
				</div>
				<div class="col-sm-6 portfolio-item branded logos">
		    			<div class="form-group">
		    				{!!Form::label('',null, array('class' => 'control-label col-xs-3'))!!}
							<div class="col-xs-3">	
								<input type="hidden" name="NuevoMunicipioD" id="NuevoMunicipioD">
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
