@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Usuario creado correctamente');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Usuario editado correctamente GALLINA');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El usuario ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel deep-orange lighten-2">Usuarios Almacenados</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Operación</th>
		</thead>
		@foreach($users as $user)
		<tbody>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				{!!link_to_route('usuario.edit', $title = 'Editar', $parameters = $user->id, $attributes = ['class'=>'btn btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop