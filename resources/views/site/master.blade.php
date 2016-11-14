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
    <meta name="author" content="Alisson Santos">
    <link rel="shortcut icon" type="image/x-icon" href="" />
    <title>Teste DZ estudio</title>

    <!-- Bootstrap -->
    <link href="{{ URL::asset('resources/css/base.css')}}" rel="stylesheet">
    
    <!--[if gte IE 9]>
  <style type="text/css">
    .gradient {
       filter: none;
    }
  </style>
<![endif]-->

    
    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="{{ URL::asset('resources/js/plugin/ie8-responsive-file-warning.js') }}"></script><![endif]-->

    <script src="{{ URL::asset('resources/js/plugin/ie-emulation-modes-warning.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ URL::asset('resources/js/plugin/ie10-viewport-bug-workaround.js') }}"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="{{ URL::asset('resources/js/plugin/html5shiv.js') }}"></script>
      <script src="{{ URL::asset('resources/js/plugin/respond.js') }}"></script>
    <![endif]-->
    
  </head>
    

    
    <!-- BODY -->
    <body>    
     <header>
        <nav>
            <div class="col-1 logo"><img src="{{ URL::asset('resources/img/logo.png')}}"> </div>
            <div class="col-2 menu">
              <ul>
                 <li class="dropdown">
                    <span>Sobre Nós</span>
                    <div class="dropdown-content">
                        <ul>
                           <li>Selecionar item 01</li>
                           <li>Ou item 02</li>
                           <li>Selecionar esse</li>
                           <li>Ou esse</li>
                        </ul>
                    </div>
                 </li>
                 <li>
                    <span>Destinos</span>
                 </li>
                 <li>
                    <span>Acomodações</span>
                 </li>
                 <li>
                    <span>Contato</span>
                 </li>
              </ul>
            </div>
            <div class="clear"></div>
        </nav>
     </header> 

     <section class="slider">
         <div class="item-slider" style="background-image: url('{{'resources/img/foto-slider.jpg' }}')">
             <h2>Melhores Destinos</h2>
             <span>Percebemos, cada vez mais, que o novo modelo estrutural aqui preconizado faz parte de um processo de gestão de alternativas às soluções ortodoxas.</span>
         </div>
         <div class="item-slider" style="background-image: url('{{'resources/img/foto-slider.jpg' }}')">
             <h2>Melhores Destinos</h2>
             <span>Percebemos, cada vez mais, que o novo modelo estrutural aqui preconizado faz parte de um processo de gestão de alternativas às soluções ortodoxas.</span>
         </div>
         <div class="item-slider" style="background-image: url('{{'resources/img/foto-slider.jpg' }}')">
             <h2>Melhores Destinos</h2>
             <span>Percebemos, cada vez mais, que o novo modelo estrutural aqui preconizado faz parte de um processo de gestão de alternativas às soluções ortodoxas.</span>
         </div>
     </section> 

    <!-- CONTEÚDO -->
        @yield('conteudo')
    <!-- FIM CONTEÚDO -->
    <footer>
           <div class="engloba-form">
               <h2>Ficou Interessado?</h2>
               <span>preencha o formulario e entre en contato conosco</span>
               <form id="signupForm" method="POST">
                   <div>
                        <input name="nome" type="text" value="" placeholder="Nome" required>
                    </div>

                    <div>
                        <input name="email" type="text" value="" placeholder="E-mail" required>
                    </div>

                    <div>
                        <input name="telefone" type="text" value="" placeholder="Telefone" required>
                    </div>


                    <div>
                        <textarea placeholder="Olá. gostaria de mais informações sobre as acomodações em casas na praia.
Obrigado!" name="area" required></textarea>
                    </div>
                    
                    <div>
                        <button class="btn btn-effects-form submit">Enviar</button>
                    </div>
               </form>
           </div>
    </footer>
    
    <!-- JAVA SCRIPT -->

    <script>
            window.PATH = '<?= url('/') ?>';
            window.TOKEN = '<?= csrf_token() ?>';
    </script>

    <script data-main="{{ URL::asset('resources/js/min/app') }}" src="{{ URL::asset('resources/js/require.js') }}"></script>
    
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <!-- FIM JAVA SCRIPT -->
    
   
    </body>
    <!-- FIM BODY -->
</html>