<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="DC.identifier" content="" scheme="URL" />
    <meta name="DC.title" content="">
    <meta name="subject" content="" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="identifier-url" content="">
    <meta name="language" content="Portuguese" />
    <meta name="revisit-after" content="5 day">
    <meta name="robots" content="index,follow" />
    <meta name="author" content="CREADEDI">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo e(URL::asset('web_files/images/favicon.ico')); ?>" />
    <title>CREADEDI - Creative Design Digital</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(URL::asset('web_files/css/principal.css')); ?>" rel="stylesheet">
    
    <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="<?php echo e(URL::asset('web_files/js/ie8-responsive-file-warning.js')); ?>"></script><![endif]-->

    <script src="<?php echo e(URL::asset('web_files/js/ie-emulation-modes-warning.js')); ?>"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo e(URL::asset('web_files/js/ie10-viewport-bug-workaround.js')); ?>"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo e(URL::asset('web_files/js/html5shiv.js')); ?>"></script>
      <script src="<?php echo e(URL::asset('web_files/js/respond.js')); ?>"></script>
    <![endif]-->
    
  </head>
    
	<body>
    
    <!-- BODY -->
    <body>
    
    
     <!-- MENU -->
        
     <header>

<nav id="fixedbar"></nav>
   
<nav id="navigation">

<a id="trigger-overlay" class="logo_menu"></a>		  
<!-- /container -->
		<!-- open/close -->
		<div class="overlay overlay-hugeinc">
			<a class="bt_close" id="overlay-close">Close</a>

			<nav>
                <menu>
                   <div class="logo_mobile">
                     <img src="<?php echo e(URL::asset('web_files/images/svg/logo_creadedi.svg')); ?>">
                   </div>
                   <div class="logo_desk">
                     <img src="<?php echo e(URL::asset('web_files/images/svg/logo_creadedi.svg')); ?>">
                   </div>
                   
                   <div class="menu_desk menu_mobile">
                  <ul>
                <li><a href="<?php echo e(URL::asset('/')); ?>"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="menu1">Home</a></li>
    <li><a href="./trabalhos" class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="menu4">Trabalhos</a></li>
					<li><a href="<?php echo e(URL::asset('sobre')); ?>"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="menu2">Quem Sou</a></li>
					<li><a href="./que_sei_fazer"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="menu3">O que eu Faço</a></li>
    <li><a href="./blog"
    class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="menu6">Blog</a></li>
					<li><a href="./contato" class="animsition-link"
    data-animsition-out="fade-out"
    data-animsition-out-duration="900" id="menu5">Contato</a></li>
				</ul>   
                     
                   
                   </div>
                   
                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 "><div class="estilo_rodape_menu"><div class="engloba_redes_sociais"><img src="<?php echo e(URL::asset('web_files/images/rede_social.png')); ?>"></div><div class="clear"></div></div>
                   </div>
                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6"><div class="estilo_rodape_menu"><div class="engloba_idiomas">
                   <span class="idioma">EN</span>
                   <span class="idioma">FR</span>
                   <!--<span class="idioma">DE</span>
                   <span class="idioma">ES</span>
                   <span class="idioma">IT</span>-->
                   <div class="clear"></div>
                   </div><div class="clear"></div></div></div>
                   
                   <div class="clear"></div>
                </menu>
				
			</nav>
		</div>

 
</nav>


</header>  


       <!-- FIM MENU --> 
    
    
    
    <!-- CONTEÚDO -->
        <?php echo $__env->yieldContent('conteudo'); ?>
    <!-- FIM CONTEÚDO -->
    
    <!-- JAVA SCRIPT -->
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="<?php echo e(URL::asset('web_files/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery-ui.js')); ?>"></script>
    
    
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
	
    <script src="<?php echo e(URL::asset('web_files/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/collapse.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/transition.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery.fancybox.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery.fancybox-media.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('web_files/js/jquery.mousewheel.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery.easing.min.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('web_files/js/modernizr.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('web_files/js/jquery.vide.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery.waypoints.min.js')); ?>"></script>
    
    <!-- Fancybox -->
    <script type="text/javascript">
$(document).ready(function() {
		$(".fancybox").fancybox();
	});
</script> 

    <script type="text/javascript">
$(document).ready(function() {
	$('.fancybox-media').fancybox({
		openEffect  : 'none',
		closeEffect : 'none',
		helpers : {
			media : {}
		}
	});
});
</script>


    
    
    <!-- Include JavaScript Collapse -->
    <script>
    $(document).ready(function() {
    $('#accordion').collapse('hide');
    });
	
	$('#accordion').on('show.bs.collapse', function () {
    $('#accordion .in').collapse('hide');
    });
	</script>
    
    
    
   <!-- Transition page -->
    <script src="<?php echo e(URL::asset('web_files/js/jquery.animsition.js')); ?>"></script>
   
   <script>
   $(document).ready(function() {
  
  $(".animsition").animsition({
  
    inClass               :   'fade-in',
    outClass              :   'fade-out',
    inDuration            :    1500,
    outDuration           :    800,
    linkElement           :   '.animsition-link',
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true,
    loadingParentElement  :   'body', //animsition wrapper element
    loadingClass          :   'animsition-loading',
    unSupportCss          : [ 'animation-duration',
                              '-webkit-animation-duration',
                              '-o-animation-duration'
                            ],
    //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
    //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".
    
    overlay               :   false,
    
    overlayClass          :   'animsition-overlay-slide',
    overlayParentElement  :   'body'
  });
});</script>



<!-- ModalMenu -->
<script>
        $( "#trigger-overlay" ).click(function() {
            $( ".overlay" ).addClass('open');
        });
        $( "#overlay-close" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		 $( "#menu1" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		$( "#menu2" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		$( "#menu3" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		$( "#menu4" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		$( "#menu5" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		$( "#menu6" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		$( "#port_int" ).click(function() {
            $( ".overlay" ).removeClass('open');
        });
		

    </script>


<!-- API Google Maps -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script type="text/javascript" src="<?php echo e(URL::asset('web_files/js/maps.js')); ?>"></script>



<script type="text/javascript">
$(document).ready(function(){
  $('#navigation a, #fixedbar a').on('click', function(e) {
    e.preventDefault();
  });
  
  $(window).on('scroll',function() {
    var scrolltop = $(this).scrollTop();

    if(scrolltop >= 500) {
      $('#fixedbar').fadeIn(250);
    }
    
    else if(scrolltop <= 500) {
      $('#fixedbar').fadeOut(250);
    }
  });
});
</script>

<script type="text/javascript">//<![CDATA[ 
        $(function(){
            function onScrollInit( items, trigger ) {
                items.each( function() {
                var osElement = $(this),
                    osAnimationClass = osElement.attr('data-os-animation'),
                    osAnimationDelay = osElement.attr('data-os-animation-delay');
                  
                    osElement.css({
                        '-webkit-animation-delay':  osAnimationDelay,
                        '-moz-animation-delay':     osAnimationDelay,
                        'animation-delay':          osAnimationDelay
                    });

                    var osTrigger = ( trigger ) ? trigger : osElement;
                    
                    osTrigger.waypoint(function() {
                        osElement.addClass('animated').addClass(osAnimationClass);
                        },{
                            triggerOnce: true,
                            offset: '90%'
                    });
                });
            }

            onScrollInit( $('.os-animation') );
            onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );
});//]]>  

    </script>
    
    <!-- FIM JAVA SCRIPT -->
    
   
    </body>
    <!-- FIM BODY -->
</html>
