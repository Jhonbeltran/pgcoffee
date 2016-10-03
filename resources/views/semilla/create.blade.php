@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Agrega una nueva semilla</h5>
			</div>
			<div class="col s12 l6">
				<a href="/semilla/" class="waves-effect waves-light btn btn-flat left btn-large right">Semillas Almacenadas</a>
			</div>
		</div>

		{!!Form::open(['route'=>'semilla.store', 'method'=>'POST'])!!}
			@include('semilla.forms.sem')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop