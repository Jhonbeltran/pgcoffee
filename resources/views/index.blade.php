@extends('layouts.principal')
<?php $message=Session::get('message')?>

@if($message == 'success')
  <script>
    alert('Ha logeado correctamente');
  </script> 
@endif
@section('content')
  <!-- <div class="container"> -->
      <div class="row">
        <div class="col s12 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="https://static.pexels.com/photos/6347/coffee-cup-working-happy.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Ingresar Datos<i class="material-icons right">more_vert</i></span>
              <p><a href="/cultivo/create" class="deep-orange-text">Iniciar</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Ingresar Datos<i class="material-icons right">close</i></span>
              <p>Acá podrás ingresar los datos del cultivo.</p>
            </div>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="http://www.revistasumma.com/wp-content/uploads/2015/04/Caf%C3%A91.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Semillas<i class="material-icons right">more_vert</i></span>
              <p><a href="/semilla/create" class="deep-orange-text">Agregar</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Modificar<i class="material-icons right">close</i></span>
              <p>Actualiza la base de datos de Semillas.</p>
            </div>
          </div>
        </div>
        <div class="col s12 l4">
          <div class="card">
            <div class="card-image waves-effect waves-block waves-light">
              <img class="activator" src="http://sawadacoffee.com/wp-content/uploads/Sawada-Coffee-10DEC2015-003.jpg">
            </div>
            <div class="card-content">
              <span class="card-title activator grey-text text-darken-4">Registro<i class="material-icons right">more_vert</i></span>
              <p><a href="/cultivo/" class="deep-orange-text">Ver</a></p>
            </div>
            <div class="card-reveal">
              <span class="card-title grey-text text-darken-4">Registro<i class="material-icons right">close</i></span>
              <p>Consulta los diferentes cultivos almacenados.</p>
            </div>
          </div>
        </div>
      </div>
  <!-- </div> -->
@stop