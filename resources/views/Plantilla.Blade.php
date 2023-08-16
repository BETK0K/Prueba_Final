<!DOCTYPE html>
<html lang="en">
<head>
<script src="https://cdn.userway.org/widget.js" data-account="xva4metR2T"></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Consultoria Web</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="Estilos/Plantilla.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
</head>
<body class="selectable-text-area">
	<div>
		<div class="menu">
			<nav class="navbar navbar-expand-lg navbar navbar-light" >
  				<div class="container-fluid">
   					<a href="/" title="Inicio"><img src="Imagenes/LogoChiquito.png"></a>
   					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
     					<span class="navbar-toggler-icon"></span>
   					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
     					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
       						<li class="nav-item">
  	  							<a class="nav-link" href="asesorias">Asesorias</a>
       						</li>
        					<li class="nav-item">
         						<a class="nav-link" href="nosotros">Nosotros</a>
        					</li>
        					<li class="nav-item">
         						<a class="nav-link" href="proyectos">Proyectos</a>
        					</li>
      					</ul>
					</div>
      				<a href="inicio_de_sesion" title="Inicio de Sesion"><img src="Imagenes/usuario.png" width="30px" height="30px" alt=""></a>
  				</div>
			</nav>
		</div>
		<div>
			<button id="btn_play" class="seleccionar-texto"><i class="fa fa-play"></i></button>
			<button id="btn_pause" class="seleccionar-texto"><i class="fa fa-pause"></i></button>
			<button id="btn_stop" class="seleccionar-texto"><i class="fa fa-stop"></i></button>
		</div>
		<div class="container">
            <input type="checkbox" id="btn-mas">
			<div class="Acces-voz">
                <button id="activar" class="fa fa-eye desactivado" style="display: block" onClick="openToastr('Lectura por Parrafos Activada')"></button>
                <button id="desactivar" class="fa fa-eye-slash activado" style="display: none" onClick="openToastr('Lectura por Parrafos Desactivada')"></button>
				<button id="activarSeleccion" class="fa fa-mouse-pointer desactivado" style="display: block" onClick="openToastr('Lectura por Selección Activada')"></button>
                <button id="desactivarSeleccion" class="fa fa-times activado" style="display: none" onClick="openToastr('Lectura por Selección Desactivada')"></button>
            </div>
            <div class="btn-mas">
                <label for="btn-mas" class="fa fa-assistive-listening-systems"></label>
            </div>
        </div>
		<div id="toastr" class="toastr">
			<span>Hola</span>
		</div>
		<section class="main">
			<div id="page" class="menu wrapper">
				@yield('/')
				@yield('Asesorias')
				@yield('Contactanos')
				@yield('Nosotros')
				@yield('Proyectos')
				@yield('Registro')
				@yield('Inicio_de_Sesion')
				@yield('Restablecer')
				@yield('Codigo')
				@yield('Verificar')
				@yield('Estado')
			</div>
		</section>
		<!-- <a href="#" class="btn-flotante">Llamada a la acción</a> -->
		
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
  			
     			<img class="bi" src="Imagenes/LogoChiquito.png" margin="10px" width="35" height="30"></img>
      			<span class="text-muted">© 2021 Consultoria UTec, Inc</span>
    		
    		<ul class="nav col-md-4 justify-content-end list-unstyled d-flex ">
     			<li class="ms-4"><img src="Imagenes/twitter.png" class="bi" width="24" height="24" ></li>
     			<li class="ms-4"><img src="Imagenes/instagram.png" class="bi" width="24" height="24"></li>
     			<li class="ms-4"><img src="Imagenes/facebook.png" class="bi" width="24" height="24" right="200px"></li>
   			 </ul>
  		</footer>
	</div>
</body>
<!-- Extension de JavaScript para manipular objetos -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js"></script>
<script src="js/Validaciones.js"></script>
<script src="js/Accesibilidad.js"></script>
<script src="js/Seleccionar_Texto.js"></script>
<script src="js/Activar_Acce.js"></script>
<script>
	const toastr = document.querySelector('#toastr');
	const openToastr = (message) => {
	toastr.style.display = 'flex';
	toastr.innerHTML = message;
	closeToastr();
}

const closeToastr = (message)=> {
	setTimeout(() =>{
		toastr.style.display = 'none';
	},3000)
}
</script>
</html>