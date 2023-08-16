@extends('Plantilla')
@section('Asesorias')
  <div class="mensaje">
    <h1>ASESORIAS</h1>
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Inicio</a></li>
        <li class="breadcrumb-item active" aria-current="page" style="color:white;">Asesorias</li>
      </ol>
    </nav>
  </div>
  <section class="main">
    <div class="asesoria">
      <article>
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Diseño de páginas web</h5>
                <p class="card-text">Te podemos brindar nuestro apoyo a la hora de crear tu página web.</p>
                <a href="error404" class="btn btn-primary">Da click aquí para continuar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Aplicaciones web</h5>
                <p class="card-text">Te podemos brindar ayuda si estas realizando tu aplicación web.</p>
                <a href="error403" class="btn btn-primary">Da click aquí para continuar</a>
              </div>
            </div>
          </div>
          <br>
        </div>
        <br>
        <div class="row">  
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Diseño de Programas Administrativos</h5>
                <p class="card-text">Podemos diseñar programas computacionales que mejoren y faciliten tu trabajo.</p>
                <a href="error400" class="btn btn-primary">Da click aquí para continuar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Diseño de Aplicaciones Moviles</h5>
                <p class="card-text">Podemos realizar la aplicación que mas se adapte a tu necesidades.</p>
                <a href="error402" class="btn btn-primary">Da click aquí para continuar</a>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-sm-6">
           <div class="card"> 
              <div class="card-body">
                <h5 class="card-title">Administración de BDs</h5>
                <p class="card-text">Concejos para administrar efcientemente tus BD.</p>
                <a href="error500" class="btn btn-primary">Da click aquí para continuar</a>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Diseño web</h5>
                <p class="card-text">Podemos revisar el diseño de tu página web.</p>
                <a href="error503" class="btn btn-primary">Da click aquí para continuar</a>
              </div>
            </div>
          </div>
        </div>
      </article> 
    </div> 
  </section>
@endsection