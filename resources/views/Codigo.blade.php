<?php 
if( isset($_GET['correo'])  && isset($_GET['token']) ){
    $correo=$_GET['correo'];
    $token=$_GET['token'];
}else{
    header("Location: http://consultoria_web.test/");
}
?>
@extends('Plantilla')
@section('Codigo')

    <div class="mensaje">
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	         
	    </nav>
	    <br>
	</div>
    <div class="container-fluid">
	    <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6">
                <div class="card mt-2 text-center bg-ligth">
                    <div class="card-body bg-light text-secondary">
                        <h4 class="card-title">Colocar codigo</h4>
                        <p class="card-text">
                            <br>
                            <input type="number" class="form-control" id="codigo" name="codigo" placeholder="Codigo">
                            <input type="hidden" class="form-control" id="correo" name="correo" value="<?php echo $correo;?>">
                            <input type="hidden" class="form-control" id="token" name="token" value="<?php echo $token;?>">
                            <input type="button" class="btn btn-primary mt-3" value="Restablecer" id="resta" name="resta">
                    </div>    
                </div>
            </div>
            <div class="logo my-auto mx-auto text-center col-sm-12 col-md-6 col-lg-6">
                <img src="Imagenes/Contra.gif"></img>
            </div>   
        </div>
    </div>
@endsection