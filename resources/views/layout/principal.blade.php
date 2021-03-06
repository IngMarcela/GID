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
    
    {!!Html::style('css/jquery.fileupload.css')!!}
	
    
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
    	<header id="header">      
       
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">HOME</a></li>
                        <li class="dropdown"><a href="/contrato">CONTRATOS</a></li>                    
                        <li class="dropdown"><a href="/otrosis">OTROSI</a></li>
                        <li class="dropdown"><a href="/documentos">DOCUMENTOS </a></li>            
                    </ul>
                </div>

            </div>
        </div>
    </header>
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
    

   
    <section id="team">
        <div class="container">
    <!-- hace el llamado a la ventana emergente -->           
           @yield('modal')
            @yield('content') 
        </div>
    </section>
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
    {!!Html::script('js/dropdownDepartamento.js')!!}
    {!!Html::script('js/dropdownMunicipio.js')!!}
    {!!Html::script('js/dropdownEstante.js')!!}
    {!!Html::script('js/dropdownCaja.js')!!}
    
    {!!Html::script('js/cargarRUP.js')!!}
    
    <!--ventana modal-->
    {!!Html::script('js/funcion.js')!!}


   @yield('script')
    
    
    
 
   
</body>
</html>
