@extends('layout.layout')
@section('title','Palmares | Actividad N°5')
@section('content')
	<section class="mt-4 mb-4">
		<div class="container">
			<div class="row mb-3">
				<div class="col-12 text-center">
					<div class="title_section">
						Palmarés
					</div>
					<div class="subtitulo">
						<p>
							Las vitrinas del museo barcelonista acogen todos los trofeos posibles, encabezados por las Copas de Europa conseguidas en las finales de Wembley (1992 y 2011), París (2006), Roma (2009), Berlín (2015) y el Mundial de Clubes de Abu Dhabi y Japón (2009, 2011 y 2015)
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="panel">
						<img src='{{url("/Actividad1")}}/img/panel1.jpg' alt="">
					</div>
				</div>
			</div>
			<div class="row mt-5 mb-5 justify-content-center">
				<div class="col-lg-8 col-md-6 col-12">
					<div class="card mb-3 shadow">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src='{{url("/Actividad1")}}/img/ucl.png' class="card-img mt-3" alt="barca">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body text-center">
					        <h5 class="card__title">Copa de Europa - 5</h5>
					        <p class="card__text">1991-92, 2005-06, 2008-09, 2010-11, 2014-15</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-12">
					<div class="card mb-3 shadow">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src='{{url("/Actividad1")}}/img/mc.png' class="card-img mt-3" alt="barca">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body text-center">
					        <h5 class="card__title">Mundial de Clubs - 3</h5>
					        <p class="card__text">2009-10, 2011-12, 2015-16</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-12">
					<div class="card mb-3 shadow">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src='{{url("/Actividad1")}}/img/rcu.jpg' class="card-img" alt="barca">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body text-center">
					        <h5 class="card__title">Recopa de Europa - 4</h5>
					        <p class="card__text">1978-79, 1981-82, 1988-89, 1996-97</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-12">
					<div class="card mb-3 shadow">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src='{{url("/Actividad1")}}/img/sce.png' class="card-img mt-3" alt="barca">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body text-center">
					        <h5 class="card__title">Supercopa de Europa - 5</h5>
					        <p class="card__text">1992-93, 1997-98, 2009-10, 2011-12, 2015-16</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-12">
					<div class="card mb-3 shadow">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src='{{url("/Actividad1")}}/img/liga.png' class="card-img mt-3" alt="barca">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card__title text-center">Liga - 26</h5>
					        <p class="card__text">1928-29, 1944-45, 1947-48, 1948-49, 1951-52, 1952-53, 1958-59, 1959-60, 1973-74, 1984-85, 1990-91, 1991-92, 1992-93, 1993-94, 1997-98, 1998-99, 2004-05, 2005-06, 2008-09, 2009-10, 2010-11, 2012-13, 2014-15, 2015-16, 2017-18, 2018-19</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-12">
					<div class="card mb-3 shadow">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src='{{url("/Actividad1")}}/img/cr.png' class="card-img mt-3" alt="barca">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card__title text-center">Copa del Rey - 30</h5>
					        <p class="card__text">1909-10, 1911-12, 1912-13, 1919-20, 1921-22, 1924-25, 1925-26, 1927-28, 1941-42, 1950-51, 1951-52, 1952-53, 1956-57, 1958-59, 1962-63, 1967-68, 1970-71, 1977-78, 1980-81, 1982-83, 1987-88, 1989-90, 1996-97, 1997-98, 2008-09, 2011-12, 2014-15, 2015-16, 2016-17, 2017-18</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
				<div class="col-lg-8 col-md-6 col-12">
					<div class="card mb-3 shadow">
					  <div class="row no-gutters">
					    <div class="col-md-4">
					      <img src='{{url("/Actividad1")}}/img/scespaña.jpg' class="card-img" alt="barca">
					    </div>
					    <div class="col-md-8">
					      <div class="card-body">
					        <h5 class="card__title text-center">Supercopa de España - 13</h5>
					        <p class="card__text">1983-84, 1991-92, 1992-93, 1994-95, 1996-97, 2005-06, 2006-07, 2009-10, 2010-11, 2011-12, 2013-14, 2016-17, 2018-19</p>
					      </div>
					    </div>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</section>
@endsection