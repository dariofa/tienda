@extends('admin.template.main')
@section('titulo','Crear Comida')
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
<div class="comidas">
		<h5>Comidas:</h5>
		<div class="formulario">
		{!! Form::open(['route'=>'admin.comidas.store','method'=>'POST']) !!}
			<div class="form-group">
				{!! Form::label('descripcion_comida','Descripción') !!}
				{!! Form::text('descripcion_comida',null,['class'=>'form-control','placeholder'=>'Descripción','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('valor_comida','Valor Normal') !!}
				{!! Form::number('valor_comida',null,['class'=>'form-control','placeholder'=>'Valor','required']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('valor_comida_tiquetera','Valor Tiquetera') !!}
				{!! Form::number('valor_comida_tiquetera',null,['class'=>'form-control','placeholder'=>'Valor tiquetera','required']) !!}
			</div>			
			<div class="form-group">
				{!! Form::submit('Registrar',['class'=>'btn btn-success']) !!}
			</div>
				

		{!! Form::close() !!}


		</div>

</div>



@endsection