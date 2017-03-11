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



	@foreach($factura as $factura)
	<div class="form-horizontal">
	
	<div class="row">
 	<div class="pane">
 	
 	<div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('No Factura', null, array('class' => 'control-label col-xs-3'))!!}
				<div class="col-xs-3">
					{!!Form::number('No_Factura',$factura->no,['class'=>'form-control-3','placeholder'=>'No Factura','readonly' => 'true'])!!}
				</div>	
			</div>
    	</div>
    </div><div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3">
					{!!Form::text('Estante',$factura->estante,['class'=>'form-control-3','placeholder'=>'Estante','readonly' => 'true'])!!}			
				</div>	
			</div>
    	</div>
    </div>  
    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3'))!!}
					<div class="col-xs-3">
					{!!Form::text('Caja',$factura->caja,['class'=>'form-control-3','placeholder'=>'Caja','readonly' => 'true'])!!}	</h2>
					</div>	
				</div>    	
	    	</div>
	    </div>
	    <div class="portfolio-items">
	    	<div class="col-sm-6 portfolio-item branded logos">
	    		<div class="form-group">
					{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
					{!!Form::text('Carpeta',$factura->carpeta,['class'=>'form-control-3','placeholder'=>'Carpeta','readonly' => 'true'])!!}
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
    		<div class="form-group"><!-- label de empresa -->
				{!!Form::label('Empresa', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Empresa',$factura->empresa,['class'=>'form-control-3','placeholder'=>'Empresa','readonly' => 'true'])!!}
				</div>	
			</div>
    	</div>
    </div>
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group"><!-- label de detalle -->
				{!!Form::label('Detalle', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3"><!-- caja de texto -->	
					{!!Form::text('Detalle',$factura->detalle,['class'=>'form-control-3','placeholder'=>'Detalle','readonly' => 'true'])!!}
				</div>	
			</div>
    	</div>
    </div> 
    <div class="portfolio-items">
    	<div class="col-sm-6 portfolio-item branded logos">
    		<div class="form-group">
				{!!Form::label('Valor Total', null, array('class' => 'control-label col-xs-3'))!!}	
				<div class="col-xs-3">	
					{!!Form::number('Valor_Total',$factura->valor,['class'=>'form-control-3','placeholder'=>'$0.0','readonly' => 'true'])!!}
				</div>	
			</div>
    	</div>
    </div>  	
	<!-- Tabla de contenido del pdf -->
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
				<th>{{$factura -> pdf}}</th>
				<th class="centro"><a href="{{url('documentos/'.$factura->pdf)}}" class="btn btn-primary btn-social" target="_blank"><i class="fa fa-file-pdf-o"></i><img src="/images/pdf.png"></a></th>
				
				
				
			</tbody>
			
			
		</table>
	</div>	
		<!-- Contiene el listado de todos los usuarios -->
	</div>
	 
	@endforeach
	</div>	
    
@stop

