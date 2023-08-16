@extends('Plantilla')
@section('Verificar')
    <div class="mensaje">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	         <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
	            <li class="breadcrumb-item active" aria-current="page" style="color:white;">Inicio de Sesión</li>
	         </ol>
	    </nav>
	    <br>
	</div>
    
    <div class="container-fluid">
	    <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card mt-2 text-center bg-ligth">
                    <div class="card-body bg-light text-secondary">
                        <h4 class="card-title">Restablecer Contraseña</h4>
	                    <p class="card-text">
							<input type="email" id="correo" class="form-control mt-1" name="correo" placeholder="Correo" requiered>
							<input type="password" id="nueva" class="form-control mt-1" name="nueva" placeholder="Nueva Contraseña" requiered>
							<input type="password" id="confir" class="form-control mt-1" name="confir" placeholder="Confirmar Contraseña" requiered>
							<div class="g-recaptcha" data-sitekey="6Lfpf8QeAAAAAIvfA2nd0dQ5MRvYYF6lDZws4kk3"></div>
							<br/>
	                        <input type="button" class="btn btn-block btn-outline-primary mt-3" value="Cambiar" id="cambiar" name="cambiar">
	                    </p>
                    </div>    
                </div>
            </div>
            
            <div class="fondoimg logo">
                <img src="Imagenes/Inicio_de_Sesion.gif"></img>
            </div>   
        </div>
    </div>
@endsection