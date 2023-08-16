@extends('Plantilla')
@section('Proyectos')

    <div class="mensaje">
        <h1>PROYECTOS</h1>
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color:white;">Proyectos</li>
            </ol>
        </nav>
    </div>

    <section class="main">
        <div class="container">
            <h2>Tenemos experiencia en: </h2>
            <br>
            <table class="table table-borderless align-items-center" style="width: auto;">
                <tr>
                    <td>
                        <h6>Administración de Bases de datos</h6>
                    </td>
                    <td>
                        <h6>Desarrollo de páginas web con Laravel</h6>
                    </td>
                    <td>
                        <h6>Diseño de páginas utilizando Bootstrap</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="Imagenes/Base.png">
                    </td>
                    <td>
                        <img src="Imagenes/Laravel.png">
                    </td>
                    <td>
                        <img src="Imagenes/Boos.png">
                    </td>
                </tr>
                <br> 
                <tr>
                    <td>
                        <h6>Contenido interactivo en HTML5</h6>
                    </td>
                    <td>
                        <h6>Aplicaciones con Android studio</h6>
                    </td>
                    <td>
                        <h6>Manejo de contenidos ASP.NET</h6>
                    </td>
                </tr>
                <tr>
                    <td>
                        <img src="Imagenes/HTML.png">
                    </td>
                    <td>
                        <img src="Imagenes/Android.png">
                    </td>
                    <td>
                        <img src="Imagenes/ASP.png">
                    </td>
                </tr>
            </table>
        </div>
    </section>
@endsection