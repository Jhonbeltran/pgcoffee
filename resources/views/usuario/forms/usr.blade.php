			<div class="row">
				<div class="input-field col s12 l6">
		            <i class="material-icons prefix">account_circle</i>
		            {!!Form::text('name', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
		            <label for="icon_prefix">Nombre</label>
		        </div>
		        <div class="input-field col s12 l6">
	                <i class="material-icons prefix">language</i>
	                {!!Form::text('email', null, ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Correo electrónico</label>
	            </div>
			</div>
			<div class="row">
				<div class="input-field col s12 l6">
	                <i class="material-icons prefix">lock_outline</i>
	                {!!Form::password('password', ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Escoge una Contraseña</label>
	            </div>
	            <div class="input-field col s12 l6">
	                <i class="material-icons prefix">lock_outline</i>
	                {!!Form::password('again', ['class'=>'validate', 'id'=>'icon_prefix'])!!}
	                <label for="icon_prefix">Repite la contraseña</label>
	            </div>
			</div>
			