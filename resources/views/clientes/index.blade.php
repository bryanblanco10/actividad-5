@extends('layout.layout')
@section('title','Clientes | Actividad N°1')
@section('content')
	<section class="mt-4 mb-4">
		<div class="container">
			<div class="row justify-content-center mt-4 mb-4">
				<div class="col-lg-8 col-md-8 col-12">
					<div class="card mb-3 shadow">
					  <div class="card-header">
						<strong>Clientes</strong>
					</div>
					<div class="card-body">	
					<form method="GET" action="{{ route('clientes.show', $cliente->id) }}">
						@csrf
						<div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Id</label>
					    <div class="col-sm-8">
					      <input type="number" class="form-control" id="id" name="id" value="{{$cliente->id}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Tipo de indetificacíon</label>
					    <div class="col-sm-8">
					      <select id="type_identification" class="form-control">
					        <option value="">
                    Seleccione
                  </option>
                  <option value="cedula">
                    Cédula
                  </option>
                  <option value="Cédula de extrangería">
                    Cédula de extrangería
                  </option>
                  <option value="Pasaporte">
                    Pasaporte
                  </option>
                  <option value="Tarjeta de identidad">
                    Tarjeta de identidad
                  </option>
					      </select>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Identificación</label>
					    <div class="col-sm-8">
					      <input type="number" class="form-control" id="identification" name="identification" value="{{$cliente->identification}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Nombres</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="names" name="names" 
					      value="{{$cliente->names}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Apellidos</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="surnames" name="surnames"
					      value="{{$cliente->surnames}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Dirección</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="address" name="address"
					      	value="{{$cliente->address}}"
					      >
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Celular</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="cell_phone" name="cell_phone"
					      value="{{$cliente->cell_phone}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Email</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="email" name="email"
					      value="{{$cliente->email}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Fecha de nacimiento</label>
					    <div class="col-sm-8">
					      <input type="date" class="form-control" id="birth_date" name="birth_date"
					      value="{{$cliente->birth_date}}">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Estado</label>
					    <div class="col-sm-8">
					      <select id="activo" class="form-control">
					        <option value="">
                    Seleccione
                  </option>
                  <option value="habilitado">
                    Habilitado
                  </option>
                  <option value="deshabilitado">
                    Deshabilitado
                  </option>
					      </select>
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Biografía</label>
					    <div class="col-sm-8">
					      <textarea 
                  class="form-control p-1"
                  name="biografia"
                  id="biografia" 
                  rows="5"
                  value="{{$cliente->biografia}}"
                >
                </textarea>
					    </div>
					  </div>
					  <div class="row text-center mb-2">
              <div class="col-4">
                <button type="submit" class="btn btn-dark btn-block">GUARDAR</button>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-danger btn-block">EDITAR</button>
              </div>
              <div class="col-4">
                <button type="submit" class="btn btn-info btn-block">BUSCAR</button>
              </div>
            </div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection