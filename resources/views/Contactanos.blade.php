<?php
    session_start();    
        if($_SESSION['usuario'] == "Beto54721"){
            header("Location:http://consultoria_web.test/estado");

        }else{
            header("Location:http://consultoria_web.test/contactanos"); 
        }
?>

@extends('Plantilla')
@section('Contactanos')
          
    <div class="mensaje">
       
        <h3>Bienvenido: <?php echo $_SESSION['usuario'] ?> estamos para servirte</h3>
		<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
	         <ol class="breadcrumb">
	            <a href="./php/Cerrar.php">Cerrar Sesión</a>
	         </ol>
	    </nav>
	    <br>
    </div>

     <h1>CONTACTANOS</h1>
    <br>
    <form method="post" action=" {{ route('consultoria.store') }} " >
        @csrf
        <div class="articulo">
            <article>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Escribe tu Email</label>
                    <input name="email" type="email" class="form-control" placeholder="nombre@dominio.com">
                </div>  
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Escribe tu Problema</label>
                    <textarea name="informacion" type="informacion" class="form-control" rows="3"></textarea>
                </div>
                <button class="btn btn-primary">Enviar</button>
            </article> 
        </div>
    </form>
    <section class="main">
        <aside class="fondoimg">
            <div class="logo">
                <img src="Imagenes/Contactanos.gif">
            </div>
        </aside>
    </section>
@endsection