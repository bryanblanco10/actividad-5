<div class="container header__container p-1">
	<div class="header__brand">
    <a href="/">
      <img
        src='{{url("/Actividad1")}}/img/logo.png'
        alt="logo"
        class="img-fluid mr-2"
      />
    </a>
      <div class="header__info">
        <p class="header__title">
          <a href="/">Actividad N°5</a>
        </p>
        <p>Ingeniería Aplicada</p>
      </div>
  </div>
  <div class="header__login">
      <a href="/">Inicio</a>
      <a href="/jugadores">Jugadores</a>
      <a href="/palmares">Palmares</a>
      <a href="{{ route('clientes.create') }}">Clientes</a>
  </div>
</div>
