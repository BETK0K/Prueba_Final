@extends('Plantilla')
@section('Registro')
	
	<div class="mensaje">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	         <ol class="breadcrumb">
	            <li class="breadcrumb-item"><a href="/">Inicio</a></li>
	            <li class="breadcrumb-item active" aria-current="page" style="color:white;">Registro</li>
	         </ol>
	    </nav>
	    <br>
	</div>

	<div class="container">
	    <div class="row">
	        <div class="col-sm-12 col-md-6 col-lg-6">
	            <div class="card mt-2 text-center bg-ligth">
	                <div class="card-body bg-light text-secondary">
	                    <h4 class="card-title">Registrate</h4>
	                    <p class="card-text">
	                        <input type="text" id="nombre" class="form-control" name="nombre" placeholder="Nombre" requiered>
							<input type="text" id="apellidos" class="form-control mt-1" name="apellidos" placeholder="Apellidos" requiered>
							<input type="email" id="correo" class="form-control mt-1" name="correo" placeholder="Correo" requiered>
							<input type="text" id="telefono" class="form-control mt-1" name="telefono" placeholder="Telefono" data-toggle="tooltip" data-placement="top" title="El Teléfono debe ser de 10 Digítos!">
							<input type="text" id="usuario" class="form-control mt-1" name="usuario" placeholder="Usuario" requiered>
							<input type="password" id="psw" class="form-control mt-1" name="psw" placeholder="Contraseña" requiered>
							
							<div class="g-recaptcha" data-sitekey="6Lfpf8QeAAAAAIvfA2nd0dQ5MRvYYF6lDZws4kk3"></div>
							<br/>
	                        <input type="button" class="btn btn-block btn-outline-primary mt-3" value="Registrar" id="registrar" name="registrar">
	                    </p>
	                </div> 
				</div>
	        </div>
	        <div class="my-auto mx-auto text-center col-sm-12 col-md-6 col-lg-6">
	            <img src="Imagenes/Registro.gif" height="350" width="350" alt=""></img>
	        </div>   
	    </div>
	</div>

	{{-- Script reCAPTCHA --}}
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>

@endsection