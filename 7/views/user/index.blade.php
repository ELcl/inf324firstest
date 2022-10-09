@extends('layout')

@include('navbar')
@section('content')
	<table class="table">
	  <thead>
	    <tr>
	      <th scope="col">CI</th>
	      <th scope="col">Nombre</th>
	      <th scope="col">Fecha de Nacimiento</th>
	      <th scope="col">Departamento</th>
	      <th scope="col">Acciones</th>
	    </tr>
	  </thead>
	  <tbody>
	    <tr>	
	    @foreach ($users as $user)
	      <th scope="row">{{ $user->ci }}</th>
	      <td>{{ $user->nombre_completo }}</td>
	      <td>{{ $user->fecha_nac }}</td>
	      <td>{{ $user->departamento }}</td>
	      <td>
	      	<button type="button" class="btn btn-warning">
	      		<a href="{{route('user.edit', $user)}}">Editar</a>
	      	</button>
	      	<form method="POST" action="{{route('user.destroy', $user)}}">
	      		@csrf
	      		@method('DELETE')
	      		<button type="submit" class="btn btn-danger">Eliminar</button>
	      	</form>
	      	
	      </td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>


@endsection
