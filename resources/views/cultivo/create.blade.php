@extends('layouts.principal')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col s12 l6">
				<h5 class="deep-orange-text">Agrega un nuevo Lote de cultivo</h5>
			</div>
			<div class="col s12 l6">
				<a href="/cultivo/" class="waves-effect waves-light btn btn-flat left btn-large right">Cultivos almacenados</a>
			</div>
		</div>

		{!!Form::open(['route'=>'cultivo.store', 'method'=>'POST'])!!}
			@include('cultivo.forms.cul')
			<div class="row center">
	            <div class="col s12">
	                {!!Form::submit('Registrar', ['class'=>'btn deep-orange'])!!}
	            </div>
	        </div>
		{!!Form::close()!!}

	</div>
@stop