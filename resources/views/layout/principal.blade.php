<!DOCTYPE html>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>HOME | SID</title>
    {!!Html::style('css/bootstrap.min.css')!!}
    {!!Html::style('css/font-awesome.min.css')!!}
    {!!Html::style('css/lightbox.css')!!}
    {!!Html::style('css/animate.min.css')!!}
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
                        <li class="dropdown"><a href="#">CONTRATOS</a></li>                    
                        <li class="dropdown"><a href="#">LICITACIONES</a></li>
                        <li class="dropdown"><a href="#">DOCUMENTOS </a></li>                      
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
            <div class="row">
            		@yield('content') 
            </div>
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
    
    {!!Html::script('js/jquery.js')!!}
    {!!Html::script('js/bootstrap.min.js')!!}
    {!!Html::script('js/lightbox.min.js')!!}
    {!!Html::script('js/wow.min.js')!!}
    {!!Html::script('js/jquery.countTo.js')!!}
    {!!Html::script('js/main.js')!!}

    
    
    
 
   
</body>
</html>