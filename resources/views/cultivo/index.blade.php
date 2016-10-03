@extends('layouts.principal')

<?php $message=Session::get('message')?>

@if($message == 'store')
	<script>
		alert('cultivo agregado correctamente');
	</script>	
@endif
@if($message == 'edit')
	<script>
		alert('Cultivo editado correctamente');
	</script>	
@endif
@if($message == 'delete')
	<script>
		alert('El registro del cultivo ha sido eliminado');
	</script>	
@endif

@section('content')
<div class="container">
	<div class="row center">
		<div class="col s12">
			<h5 class="brown-text card-panel deep-orange lighten-2">Cultivos registrados</h5>
		</div>
	</div>
	<table class="highlight centered">
		<thead>
			<th>Responsable</th>
			<th>Dirección</th>
			<th>Semilla</th>
			<th>Operación</th>
		</thead>
		@foreach($cultivos as $cultivo)
		<tbody>
			<td>{{$cultivo->responsable}}</td>
			<td>{{$cultivo->direccion}}</td>
			<td>{{$cultivo->semilla_id}}</td>
			<td>
				{!!link_to_route('cultivo.edit', $title = 'Editar', $parameters = $cultivo->id, $attributes = ['class'=>'btn btn-flat waves-effect waves-red'])!!}
			</td>
		</tbody>
		@endforeach
	</table>
</div>
@stop