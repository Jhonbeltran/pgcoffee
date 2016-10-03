@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Edición de Registro de Cultivos</h5>
			</div>
			<div class="col s12 l6">
				<a href="/cultivo/" class="waves-effect waves-light btn btn-flat left btn-large right">Cultivos almacenados</a>
			</div>
		</div>

		{!!Form::model($cultivo,['route'=>['cultivo.update', $cultivo->id], 'method'=>'PUT'])!!}
			@include('cultivo.forms.cul')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn deep-orange '])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['cultivo.destroy', $cultivo->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop