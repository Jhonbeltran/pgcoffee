<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Coffee Land</title>
    <!-- Compiled and minified CSS -->
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css')!!}
    
    <!--Import Google Icon Font-->
    {!!Html::style('http://fonts.googleapis.com/icon?family=Material+Icons')!!}
    
    

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
</head>
<body>
    <div class="navbar-fixed">
        <nav>
          <div class="nav-wrapper  brown lighten-1">
            <a href="{!!URL::to('/')!!}" class="brand-logo">Registro Coffe Land</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="/usuario/create"><i class="material-icons deep-orange-text left">supervisor_account</i>Nuevo</a></li>
              <li><a href="/login"><i class="material-icons deep-orange-text left">person_pin</i>Ingresar</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="/login">Ingresar</a>
              </li>
              <li>
                <a href="/usuario/create">Nuevo</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>

    @yield('content')
    
    <footer class="page-footer  brown lighten-1">
        <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Coffee Land</h5>
                <p class="grey-text text-lighten-4">Aplicación para registro de certificación.</p>
              </div>
              <div class="col l4 offset-l2 s12">
                <!-- <h5 class="white-text">Links</h5> -->
                <ul>
                  <!-- <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li> -->
                </ul>
              </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
            © 2016
            <!-- <a class="grey-text text-lighten-4 right" href="#!">More Links</a> -->
            </div>
        </div>
    </footer>


    <!--Import jQuery before materialize.js-->
    {!!Html::script('https://code.jquery.com/jquery-2.1.1.min.js')!!}
    <!-- Compiled and minified JavaScript -->
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js')!!}
    <script>
      $( document ).ready(
        function(){$(".button-collapse").sideNav()})
    </script>
</body>
</html>