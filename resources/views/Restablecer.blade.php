@extends('Plantilla')
@section('Restablecer')
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
                            <br>
                            <input type="email" class="form-control" id="correo" name="correo">
                            <input type="button" class="btn btn-primary mt-3" value="Restablecer" id="restablecer" name="restablecer">
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