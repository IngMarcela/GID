@extends('layout.menulateral_buscar')
@stop
@section('asig')
CONTRATO
<p>ACTA FINAL</p>
@stop
@section('act3')
active
@stop
@section('content')
	
	@foreach($acta_final as $acta)


	<div class="form-horizontal">
	
	<div class="row">
 		<div class="pane">
  			<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
						{!!Form::label('Estante', null, array('class' => 'control-label col-xs-3'))!!}	
						<div class="col-xs-3">
						{!!Form::text('Estante',$acta->estante,['class'=>'form-control-3','placeholder'=>'Estante','readonly' => 'true'])!!}
						</div>	
					</div>
				</div>
    		</div>
	 		<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
						{!!Form::label('Caja', null, array('class' => 'control-label col-xs-3'))!!}
						<div class="col-xs-3">						
						{!!Form::text('Caja',$acta->caja,['class'=>'form-control-3','placeholder'=>'Caja','readonly' => 'true'])!!}
						</div>	
					</div>    	
				</div>
			</div>
			<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
					{!!Form::label('Carpeta', null, array('class' => 'control-label col-xs-3'))!!}	
					<div class="col-xs-3">
					{!!Form::text('Carpeta',$acta->carpeta,['class'=>'form-control-3','placeholder'=>'Carpeta','readonly' => 'true'])!!}
					</div>	
					</div>
				</div>
			</div>	
		</div>
	</div>
	<div class="row">
 		<div class="pane">			 	    
			<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
						{!!Form::label('Folio Inicial', null, array('class' => 'control-label col-xs-3'))!!}	
						<div class="col-xs-3">
						{!!Form::number('Folio_Inicial',null,['class'=>'form-control-3','placeholder'=>'Folio inicial','readonly' => 'true'])!!}
						</div>	
					</div>
				</div>
			</div>	    	    
			<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
						{!!Form::label('Folio Final', null, array('class' => 'control-label col-xs-3'))!!}		
						<div class="col-xs-3">
						{!!Form::number('Folio_Final',null,['class'=>'form-control-3','placeholder'=>'Folio final','readonly' => 'true'])!!}
						</div>	
					</div>
				</div>
			</div>	    		  
			<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
							{!!Form::label('Detalle', null, array('class' => 'control-label col-xs-3'))!!}	
						<div class="col-xs-3">	
							{!!Form::text('Detalle',$acta->detalle,['class'=>'form-control-3','placeholder'=>'Detalle','readonly' => 'true'])!!}
						</div>	
					</div>
				</div>
			</div>  
			<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
							{!!Form::label('Valor', null, array('class' => 'control-label col-xs-3'))!!}		
						<div class="col-xs-3">	
							{!!Form::number('Valor',$acta->valor,['class'=>'form-control-3','placeholder'=>'$0.0','readonly' => 'true'])!!}
						</div>	
					</div>
				</div>
			</div>  
			<div class="portfolio-items">
				<div class="col-sm-6 portfolio-item branded logos">
					<div class="form-group">
							{!!Form::label('Fecha de firma', null, array('class' => 'control-label col-xs-3'))!!}		
						<div class="col-xs-3">	
							{!!Form::date('Fecha_de_Firma',$acta->fecha_final,['class'=>'form-control-3','readonly' => 'true'])!!}
						</div>	
					</div>
				</div>
			</div> 
		</div>  
	</div>   
    <div class="row">
 		<div class="pane">    
    		<div class="portfolio-items">
    				
				{!!Form::label('Observacion',null, array('class' => 'control-label col-xs-3'))!!}
		
				{!!Form::textarea('Observacion',$acta->observacion,['class'=>'form-control','placeholder'=>'Ingresa las observaciones del acta final','size' => '30x5', 'Style' => 'width: 75%; height: 123px;','readonly' => 'true'])!!}
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
				<th>{{$acta -> pdf}}</th>
				<th class="centro"><a href="{{url('documentos/'.$acta->pdf)}}" class="btn btn-primary btn-social" target="_blank"><i class="fa fa-file-pdf-o"></i><img src="/images/pdf.png"></a></th>
				
				
				
			</tbody>
			
			
		</table>
	</div>	
		<!-- Contiene el listado de todos los usuarios -->
	</div>
	 
	@endforeach
	</div>
	
	
		 	 
@stop

