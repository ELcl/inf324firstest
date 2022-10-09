@extends('layout')

@include('navbar')
@section('content')
		<form class="row g-3" method="POST" action="{{route('user.store')}}">
			@csrf
		  <div class="col-md-6">
		    <label for="inputEmail4" class="form-label" >CI</label>
		    <input type="number" class="form-control" name="ci">
		  </div>
		  <div class="col-md-6">
		    <label for="inputPassword4" class="form-label">Nombre Completo</label>
		    <input type="text" class="form-control" name="nombre">
		  </div>

		  <select class="form-select" aria-label="Default select example" name="departamento">
			<option selected>Departamento</option>
			<option value="LP">La Paz</option>
			<option value="CB">Cochabamba</option>
			<option value="SC">Santa Cruz</option>
			<option value="OR">Oruro</option>
			<option value="PT">Potosi</option>
			<option value="TJ">Tarija</option>
			<option value="BN">Beni</option>
			<option value="PD">Pando</option>
			<option value="CH">Chuquisaca</option>
		  </select>
		  <div class="col-12">
		    <label for="inputAddress" class="form-label">Fecha de Nacimiento</label>
		    <input type="date" class="form-control" name="fecha" placeholder="1234 Main St">
		  </div>
		  
		  <div class="col-12">
		    <button type="submit" class="btn btn-primary">Guardar</button>
		  </div>
		</form>
@endsection