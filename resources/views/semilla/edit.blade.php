@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Edición de registro de semillas</h5>
			</div>
			<div class="col s12 l6">
				<a href="/semilla/" class="waves-effect waves-light btn btn-flat left btn-large right">Semillas almacenadas</a>
			</div>
		</div>

		{!!Form::model($semilla,['route'=>['semilla.update', $semilla->id], 'method'=>'PUT'])!!}
			@include('semilla.forms.sem')
			<div class="row center">
	            <div class="col s6">
	                {!!Form::submit('Actualizar', ['class'=>'btn deep-orange '])!!}
	            </div>
	        
		{!!Form::close()!!}
		
	    {!!Form::open(['route'=>['semilla.destroy', $semilla->id], 'method'=>'DELETE'])!!}
			
	            <div class="col s6">
	                {!!Form::submit('Eliminar', ['class'=>'btn brown darken-4'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}
	</div>
@stop