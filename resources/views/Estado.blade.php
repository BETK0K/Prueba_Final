<?php
    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']['usuario'] == "Beto54721"){
            header("Location:http://consultoria_web.test/estado");

        }else{
            header("Location:http://consultoria_web.test/contactanos"); 
        }
    }

?>

@extends('Plantilla')
@section('Estado')
 <div class="mensaje">
     <h3>Panel de Administrador</h3>
     <br>
     <h5>Bienvenido: <?php echo $_SESSION['usuario'] ?></h5>
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	         <ol class="breadcrumb">
	            <a href="./php/Cerrar.php">Cerrar Sesión</a>
	         </ol>
	    </nav>
	    <br>
	</div>
    <br>
    <div class="container">
            <h2>Proyectos en Curso</h2>
            <div class="row">
                <div class="col-xl-12">
                   <div class="table-responsive">
                       <table class="table table-striped">
                           <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombre</th> 
                                    <th>Petición</th>
                                </tr>
                               <tbody>
                                    @foreach ($proyecto as $proyecto)
                                        <tr>
                                            <td>{{$proyecto->Id}}</td>
                                            <td>{{$proyecto->email}}</td>
                                            <td>{{$proyecto->informacion}}</td>
                                        </tr>
                                    @endforeach
                               </tbody>
                           </thead>
                       </table>
                   </div> 
                </div>
            </div>
        </div>  
@endsection