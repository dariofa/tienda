@extends('admin.template.main')
@section('titulo','Crear Usuario')
@section('contenido')

@if(count($errors)>0)
	

	<div class="alert-danger">
		<ul>
			@foreach($errors->all() as $error)
			<li>{{ $error}}</li>
			@endforeach
		</ul>
	</div>

@endif

<div class="formulario">
	{!! Form::open(['route'=>'admin.users.store','method'=>'POST']) !!}



	<div class="form-group">
		{!! Form::label('nombre','Nombre') !!}
		{!! Form::text('nombre',null,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('apellido','Apellido') !!}
		{!! Form::text('apellido',null,['class'=>'form-control','placeholder'=>'Apellido','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email','Correo') !!}
		{!! Form::email('email',null,['class'=>'form-control','placeholder'=>'example@correo.com','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('contrasena','Contraseña') !!}
		{!! Form::password('contrasena',['class'=>'form-control','placeholder'=>'******'],'required') !!}
	</div>
	<div class="form-group">
		{!! Form::label('tipo','Tipo') !!}

		{!! form::select('tipo',[''=>'Seleccione','admin'=>'Administrador','vendedor'=>'Vendedor','cliente'=>'Cliente'],null,['class'=>'form-control','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
	</div>
		

{!! Form::close() !!}


</div>



@endsection