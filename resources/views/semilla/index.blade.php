@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('Semilla almacenada correctamente');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Semilla editada correctamente');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El registro de la semilla ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel deep-orange lighten-2">Semillas Almacenadas</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Operación</th>
		</thead>
		@foreach($semillas as $semilla)
		<tbody>
			<td>{{$semilla->id}}</td>
			<td>{{$semilla->nombre}}</td>
			<td>
				{!!link_to_route('semilla.edit', $title = 'Editar', $parameters = $semilla->id, $attributes = ['class'=>'btn btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop