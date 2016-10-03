@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Agrega un nuevo usuario</h5>
			</div>
			<div class="col s12 l6">
				<a href="/usuario/" class="waves-effect waves-light btn btn-flat left btn-large right">Usuarios Registrados</a>
			</div>
		</div>

		{!!Form::open(['route'=>'usuario.store', 'method'=>'POST'])!!}
			@include('usuario.forms.usr')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop