@extends('layout.layout')
@section('title','Inicio | Actividad N°5')
@section('content')
	<!-- Slider -->
	<section>
		<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
		    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src='{{url("/Actividad1")}}/img/slider1.jpg' class="d-block w-100" alt="barcelona2010">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Campeones UCL 2010-11</h5>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src='{{url("/Actividad1")}}/img/slider2.jpg' class="d-block w-100" alt="barcelona2014">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>Campeones UCL 2014-15</h5>
		      </div>
		    </div>
		    <div class="carousel-item">
		      <img src='{{url("/Actividad1")}}/img/slider3.jpeg' class="d-block w-100" alt="barcelona2016">
		      <div class="carousel-caption d-none d-md-block">
		        <h5>El mejor TRIDENTE DEL MUNDO</h5>
		      </div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
	</section>
	<section class="mt-4 mb-4">
		<div class="container">
			<div class="row mb-3">
				<div class="col-12 text-center">
					<div class="title_section">
						Actualidad
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-3 col-6">
					<div class="card shadow h-100">
					  <img src='{{url("/Actividad1")}}/img/noticia1.jpeg' class="card-img-top" alt="messi">
					  <div class="card-body">
					    <h5 class="card-title">De Jong mantiene la esperanza: "Messi sigue en el chat de Whatsapp del equipo"</h5>
					  </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-6">
					<div class="card shadow h-100">
					  <img src='{{url("/Actividad1")}}/img/noticia2.jpeg' class="card-img-top" alt="messi">
					  <div class="card-body">
					    <h5 class="card-title">Si deja el Barça, Messi no será tan legendario: No podrá ser un 'one club man'</h5>
					  </div>
					</div>
				</div>
				<div class="col-lg-4 col-md-3 col-6">
					<div class="card shadow h-100">
					  <img src='{{url("/Actividad1")}}/img/noticia3.jpeg' class="card-img-top" alt="messi">
					  <div class="card-body">
					    <h5 class="card-title">La relación de Leo Messi y Guardiola, más allá de los éxitos</h5>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection