@extends('admin.template.main')
@section('titulo','IndexUsers')
@section('contenido')

	<a href="{{ route('admin.users.create') }}" class="btn btn-primary">Registrar Usuario</a><hr>
	<table class="table">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Apellido</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->nombre }}</td>
					<td>{{ $user->apellido }}</td>
					<td>{{ $user->email }}</td>
					<td>
						@if($user->tipo=='admin')
						<span class="label label-danger">{{ $user->tipo }}</span>
						@else
						<span class="label label-primary">{{ $user->tipo }}</span>
						@endif
					</td>
					<td>
					<a href="{{ route('admin.users.destroy',$user->id) }}" onclick="return confirm('¿Seguro que desea eliminar')" class="btn btn-danger"><i class="icon-scissors"></i></a>
					 <a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-warning"> <i class="icon-pencil"></i> </a> </td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}

@endsection