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
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <title>Teste DZ estudio</title>

    <!-- Bootstrap -->
    <link href="<?php echo e(URL::asset('resources/css/base.css')); ?>" rel="stylesheet">
    
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
    

    
    <!-- BODY -->
    <body>    
     <header>
        <nav>
            <div class="col-1 logo"><img src="<?php echo e(URL::asset('resources/img/logo.png')); ?>"> </div>
            <div class="col-2">teste</div>
            <div class="clear"></div>
        </nav>
     </header> 

     <section class="slider">
     </section> 

    <!-- CONTEÚDO -->
        <?php echo $__env->yieldContent('conteudo'); ?>
    <!-- FIM CONTEÚDO -->
    <footer>
           <div class="engloba-form">
               <h2>Ficou Interessado?</h2>
               <span>preencha o formulario e entre en contato conosco</span>
               <form>
                   <div>
                        <input name="nome" type="text" value="" placeholder="Nome">
                    </div>

                    <div>
                        <input name="email" type="text" value="" placeholder="E-mail">
                    </div>

                    <div>
                        <input name="telefone" type="text" value="" placeholder="Telefone">
                    </div>


                    <div>
                        <textarea placeholder="Mensagem"></textarea>
                    </div>

               </form>
           </div>
    </footer>
    
    <!-- JAVA SCRIPT -->

    <script>
            window.PATH = '<?= url('/') ?>';
            window.TOKEN = '<?= csrf_token() ?>';
    </script>

    <script data-main="<?php echo e(URL::asset('resources/js/min/app')); ?>" src="<?php echo e(URL::asset('resources/js/require.js')); ?>"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="<?php echo e(URL::asset('web_files/js/jquery.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery-ui.js')); ?>"></script>
    
    
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    
	
    <script src="<?php echo e(URL::asset('web_files/js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/transition.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery.fancybox.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery.fancybox-media.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('web_files/js/jquery.mousewheel.js')); ?>"></script>
    <script src="<?php echo e(URL::asset('web_files/js/jquery.easing.min.js')); ?>"></script>
    
    <script src="<?php echo e(URL::asset('web_files/js/modernizr.js')); ?>"></script>
    
    
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

    
    <!-- FIM JAVA SCRIPT -->
    
   
    </body>
    <!-- FIM BODY -->
</html>
