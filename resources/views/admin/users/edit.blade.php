@extends('admin.template.main')
@section('titulo','Editar Usuario')
@section('contenido')


<div class="formulario">
	{!! Form::open(['route'=>['admin.users.update',$user],'method'=>'PUT']) !!}



	<div class="form-group">
		{!! Form::label('nombre','Nombre') !!}
		{!! Form::text('nombre',$user->nombre,['class'=>'form-control','placeholder'=>'Nombre','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('apellido','Apellido') !!}
		{!! Form::text('apellido',$user->apellido,['class'=>'form-control','placeholder'=>'Apellido','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::label('email','Correo') !!}
		{!! Form::email('email',$user->email,['class'=>'form-control','placeholder'=>'example@correo.com','required']) !!}
	</div>
	<!--<div class="form-group">
		{!! Form::label('contrasena','Contraseña') !!}
		{!! Form::password('contrasena',['class'=>'form-control','placeholder'=>'******'],'required') !!}
	</div>-->
	<div class="form-group">
		{!! Form::label('tipo','Tipo') !!}

		{!! form::select('tipo',[''=>'Seleccione','admin'=>'Administrador','vendedor'=>'Vendedor','cliente'=>'Cliente'],$user->tipo,['class'=>'form-control','required']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit('Actualizar',['class'=>'btn btn-success']) !!}
	</div>
		

{!! Form::close() !!}


</div>



@endsection