@extends('layout')

@include('navbar')
@section('content')
		<form class="row g-3" method="POST" action="{{route('user.update', $user)}}">
			@csrf 
			@method('PATCH')
		  <div class="col-md-6">
		    <label for="inputEmail4" class="form-label" >CI</label>
		    <input type="number" class="form-control" name="ci" value={{$user->ci}}>
		  </div>
		  <div class="col-md-6">
		    <label for="inputPassword4" class="form-label">Nombre Completo</label>
		    <input type="text" class="form-control" name="nombre" value="{{$user->nombre_completo}}">
		  </div>

		  <select class="form-select" aria-label="Default select example" name="departamento">
			<option value="LP" 
			@if($user->departamento == 'LP')
				selected
			@endif
			>La Paz</option>
			<option value="CB" @if($user->departamento == 'CB')
				selected
			@endif>Cochabamba</option>
			<option value="SC" @if($user->departamento == 'SC')
				selected
			@endif>Santa Cruz</option>
			<option value="OR" @if($user->departamento == 'OR')
				selected
			@endif>Oruro</option>
			<option value="PT" @if($user->departamento == 'PT')
				selected
			@endif>Potosi</option>
			<option value="TJ" @if($user->departamento == 'TJ')
				selected
			@endif>Tarija</option>
			<option value="BN" @if($user->departamento == 'BN')
				selected
			@endif>Beni</option>
			<option value="PD" @if($user->departamento == 'PD')
				selected
			@endif>Pando</option>
			<option value="CH" @if($user->departamento == 'CH')
				selected
			@endif>Chuquisaca</option>
		  </select>
		  <div class="col-12">
		    <label for="inputAddress" class="form-label">Fecha de Nacimiento</label>
		    <input type="date" class="form-control" name="fecha" value={{$user->fecha_nac}}>
		  </div>
		  
		  <div class="col-12">
		    <button type="submit" class="btn btn-primary">Actualizar</button>
		  </div>
		</form>
@endsection