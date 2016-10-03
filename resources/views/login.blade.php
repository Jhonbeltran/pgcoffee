<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <!-- Compiled and minified CSS -->
    {!!Html::style('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css')!!}
    
    <!--Import Google Icon Font-->
    {!!Html::style('http://fonts.googleapis.com/icon?family=Material+Icons')!!}
    
    

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
</head>
<body>
<?php $message=Session::get('message')?>

@if($message == 'fail')
  <script>
    alert('Datos erroneos');
  </script> 
@endif
  <div class="container">
      <div class="row">

        <div class="col s12 l6 hide-on-med-and-down">
          <img src="http://i.imgur.com/SF3BmOU.png" width="280" alt="" class="imagen">
          </div>

        <div class="col s12 l6">
          <h1 class="nombre brown-text center-align">Coffee Land</h1>
          <h4 class="loginTexto center-align deep-orange-text">Iniciar sesión</h4>
                        
          {!!Form::open(['route'=>'log.store', 'method'=>'POST'])!!}
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">language</i>
                {!!Form::text('email', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
                <label for="icon_prefix">Correo electrónico</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                <i class="material-icons prefix">lock_outline</i>
                {!!Form::password('password', ['class'=>'validate', 'id'=>'icon_prefix'])!!}
                <label for="icon_prefix">Escoge una Contraseña</label>
              </div>
            </div>
      
            <div class="row center">
              <div class="col s12">
                {!!Form::submit('Ingresar', ['class'=>'btn deep-orange'])!!}
              </div>
            </div>
          {!!Form::close()!!}
            

          <p class="flow-text center-align">Registra todos los datos estés donde estés, aplicación 100% adaptable (necesitarás conexión a internet)</p>
                    
        </div>

                
      </div>
    </div>
    <!--Import jQuery before materialize.js-->
    {!!Html::script('https://code.jquery.com/jquery-2.1.1.min.js')!!}
    <!-- Compiled and minified JavaScript -->
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js')!!}
</body>
</html>