@extends('layout.menulateral_buscar')
@stop
@section('asig')
CONTRATO
<p>CERTIFICACION</p>
@stop
@section('act5')
active
@stop
@section('content')


	@foreach($certificacion as $certificacion)
	<div class="form-horizontal">
	
	<div class="row">
 	<div class="pane">
  	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3">
					{!!Form::text('Estante',$certificacion->estante,['class'=>'form-control-3','placeholder'=>'Estante','readonly' => 'true'])!!}		
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3">
						{!!Form::text('Caja',$certificacion->caja,['class'=>'form-control-3','placeholder'=>'Caja','readonly' => 'true'])!!}
					</div>	
				</div>    	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
						{!!Form::text('Carpeta',$certificacion->carpeta,['class'=>'form-control-3','placeholder'=>'Carpeta','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	 	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('folio inicial', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
						{!!Form::number('Folio_Inicial',null,['class'=>'form-control-3','placeholder'=>'folio inicial','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    	    
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('folio final', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
						{!!Form::number('Folio_Final',null,['class'=>'form-control-3','placeholder'=>'folio final','readonly' => 'true'])!!}
					</div>	
				</div>
	    	</div>
	    </div>	    
	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de entidad  -->
				{!!Form::label('Enitidad que Certifica', null, array('class' => 'control-label col-xs-3'))!!}
				
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Entidad_que_Certifica',$certificacion->entidad,['class'=>'form-control-3','placeholder'=>'Entidad que certifica','readonly' => 'true'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de fecha expedicion -->
				{!!Form::label('Fecha de Expedicion', null, array('class' => 'control-label col-xs-3'))!!}	
				
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::date('Fecha_de_Expedicion',$certificacion->fecha,['class'=>'form-control-3','readonly' => 'true'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de entregado por -->
				{!!Form::label('Entregado por', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Entregado_por',$certificacion->entregado,['class'=>'form-control-3','readonly' => 'true'])!!}
				</div>	
			</div>
    	</div>
    </div> 
	</div>
	
	
	</br>
	<div class="row">
	<div class="users">
		<table class="table">
		<!--divicion de la tabla -->
			<thead>			
				<th>PDF</th>				
				<th>Acciones</th>
			</thead>
			
			<!--cuerpo de la tabla -->
			<!--por el foreach se realiza un recorrido  -->
			<tbody>
				<th>{{$certificacion -> pdf}}</th>
				<th class="centro"><a href="{{url('documentos/'.$certificacion->pdf)}}" class="btn btn-primary btn-social" target="_blank"><i class="fa fa-file-pdf-o"></i><img src="/images/pdf.png"></a></th>
				
				
				
			</tbody>
			
		</table>
	</div>	
		<!-- Contiene el listado de todos los usuarios -->
	</div>
	 
	
	
			@endforeach
	
	</div>
     
@stop

