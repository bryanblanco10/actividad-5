@extends('layout.layout')
@section('title','Clientes | Actividad N°5')
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
					<form id="formulario">
						@csrf
						<div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Id</label>
					    <div class="col-sm-8">
					      <input type="number" class="form-control" id="idcliente" name="idcliente" value="">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Tipo de indetificacíon</label>
					    <div class="col-sm-8">
					      <select id="type_identification" class="form-control">
					        <option value="">
                    Seleccione
                  </option>
                  <option value="Cedula de ciudadania">
                    Cédula de ciudadania
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
					      <input type="number" class="form-control" id="identification" name="identification" value="">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Nombres</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="names" name="names" 
					      value="">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Apellidos</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="surnames" name="surnames"
					      value="">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Dirección</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="address" name="address"
					      	value=""
					      >
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Celular</label>
					    <div class="col-sm-8">
					      <input type="text" class="form-control" id="cell_phone" name="cell_phone"
					      value="">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Email</label>
					    <div class="col-sm-8">
					      <input type="email" class="form-control" id="email" name="email"
					      value="">
					    </div>
					  </div>
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Fecha de nacimiento</label>
					    <div class="col-sm-8">
					      <input type="date" class="form-control" id="birth_date" name="birth_date"
					      value="">
					    </div>
					  </div>
					  {{-- <div class="form-group row">
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
					  </div> --}}
					  <div class="form-group row">
					    <label for="id" class="col-sm-4 col-form-label">Biografía (Opcional)</label>
					    <div class="col-sm-8">
					      <textarea 
                  class="form-control"
                  name="biografia"
                  id="biografia" 
                  rows="5"
                  cols="3"
                  value=""
                >
                </textarea>
					    </div>
					  </div>
					  <div class="row text-center mb-2">
              <div class="col-3">
                <button type="submit" class="btn btn-dark btn-block" id="guardar">GUARDAR</button>
              </div>
              <div class="col-3">
                <button type="submit" class="btn btn-danger btn-block" id="editar">EDITAR</button>
              </div>
              <div class="col-3">
                <button type="submit" class="btn btn-info btn-block" id="buscar">BUSCAR</button>
              </div>
              <div class="col-3">
                <button type="submit" class="btn btn-warning btn-block" id="limpiar">LIMPIAR</button>
              </div>
            </div>
					</form>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection

@section('js')
	<script>
	
	$('#buscar').on('click',function(e){
		e.preventDefault()
		const id = $('#idcliente').val()
		if(id){
			$.ajax({
  				method: "GET",
  				url: "http://127.0.0.1:8000/clientes/"+id
			}).done(function(data) {
  				console.log(data); 
				$('#idcliente').val(data.id)
				$('#type_identification').val(data.type_identification)
				$('#identification').val(data.identification)
				$('#names').val(data.names)
				$('#surnames').val(data.surnames)
				$('#address').val(data.address)
				$('#cell_phone').val(data.cell_phone)
				$('#email').val(data.email)
				$('#birth_date').val(data.birth_date)
				$('#biografia').val(data.biografia)
			}).fail(function() {
  				alert("Algo salió mal");
			})
		}else{
			alert('Digite el id del cliente')
		}
	})

	$('#guardar').on('click', function(e){
		e.preventDefault()
		if (validar()){
			$.ajax({
  				method: "POST",
  				url: "http://127.0.0.1:8000/clientes/"
			}).done(function(data) {
  				console.log(data); 
			}).fail(function() {
  				alert("Algo salió mal");
			})
		}
	})

	function validar(){
		const type_identification = $('#type_identification').val()
		const identification = $('#identification').val()
		const names = $('#names').val()
		const surnames = $('#surnames').val()
		const address = $('#address').val()
		const cell_phone = $('#cell_phone').val()
		const email = $('#email').val()
		const birth_date = $('#birth_date').val()
		const biografia = $('#biografia').val()
		
		if(!type_identification){
			alert('Digite el tipo de indetificación')
			return false;
		}
		if(!identification){
			alert('Digite la identificacion')
			return false
		}
		if(!names){
			alert('Digite el nombre')
			return false
		}
		if(!surnames){
			alert('Digite los apellidos')
			return false
		}
		if(!address){
			alert('Digite la dirección')
			return false
		}
		if(!cell_phone){
			alert('Digite el celular')
			return false
		}
		if(!email){
			alert('Digite email')
			return false
		}
		if(!birth_date){
			alert('Digite la fecha de nacimiento')
			return false
		}

		return true
	}

	$('#limpiar').on('click',function(e){
		e.preventDefault()
		limpiar()
	})

	function limpiar(){
		$('#idcliente').val('')
		$('#type_identification').val('')
		$('#identification').val('')
		$('#names').val('')
		$('#surnames').val('')
		$('#address').val('')
		$('#cell_phone').val('')
		$('#email').val('')
		$('#birth_date').val('')
		$('#biografia').val('')
	}
	</script>
@endsection