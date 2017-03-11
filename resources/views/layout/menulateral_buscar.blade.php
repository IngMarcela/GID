<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME | SID</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/main.css')!!}
    {!!Html::style('css/responsive.css')!!}
    
     <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>    

    <!--/#header-->
    
    <section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">   
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">@yield('asig')</h1>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>    
    <!--/#about-company-->   
    @foreach($contrato as $c)
    <section id="projects" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4">
                    <div class="sidebar portfolio-sidebar">
                        <div class="sidebar-item categories">
                            <h4>SOPORTE DE CONTRATO</h4>
                            <ul class="nav navbar-stacked">
                               	<li class="@yield('act1')"><a href="{{ route('inicial_paginacion', $c->id) }}">ACTA INICIAL<span class="pull-right"></span></a></li>
                                <li class="@yield('act2')"><a href="{{ route('parcial_paginacion', $c->id) }}">ACTA PARCIAL<span class="pull-right"></span></a></li>
                                <li class="@yield('act3')"><a href="{{ route('final_paginacion', $c->id) }}">ACTA FINAL<span class="pull-right"></span></a></li>
                                <li class="@yield('act4')"><a href="{{ route('liquidacion_paginacion', $c->id) }}">ACTA LIQUIDACION<span class="pull-right"></span></a></li>
                                <li class="@yield('act5')"><a href="{{ route('certificacion_paginacion', $c->id) }}">CERTIFICACIÓN<span class="pull-right"></span></a></li>
                                <li class="@yield('act6')"><a href="{{ route('factura_paginacion', $c->id) }}">FACTURA<span class="pull-right"></span></a></li>
                                <li class="@yield('act7')"><a href="{{ route('archivo_paginacion', $c->id) }}">ARCHIVOS EXTRAS<span class="pull-right"></span></a></li>
                                <li><a href="/contrato">FINALIZAR<span class="pull-right"></span></a></li>
                            </ul>
                        </div>                      
                        
                    </div>
                </div>
                <div class="col-md-9 col-sm-8">
                    <div class="row">
                       @yield('content') 
                    </div>
                </div>
            </div>
        </div>
    </section>
    
	@endforeach
    <!--/#team-->

    <footer id="footer">
        <div class="container">
            <div class="row">
                          
                       
                
            </div>
        </div>
    </footer>
    <!--/#footer-->
    
    {!!Html::script('js/jquery.min.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    
    <!--select dinamicos-->
    {!!Html::script('js/dropdownEstante.js')!!}
    {!!Html::script('js/dropdownCaja.js')!!}
    
    <!--vntana modal-->
    {!!Html::script('js/funcion.js')!!}

    
    
    
 
   
</body>
</html>
