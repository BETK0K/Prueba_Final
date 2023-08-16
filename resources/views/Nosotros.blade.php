@extends('Plantilla')
@section('Nosotros')
</head>
    <div class="mensaje">
        <h1>NOSOTROS</h1>     
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color:white;">Nosotros</li>
            </ol>
        </nav>
    </div>

    <section class="main">
        <div class="articulo">
            <article>
                <table class="table table-striped table-hover" style="width: 1000px;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Rol</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Deficion de Rol</th>
                            <th scope="col">Numero Privado</th>
                            <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Producer</td>
                            <td>Luis Rojas</td>
                            <td>Producer, es el líder y encargado del proyecto. También puede ser de ayuda a la hora de realizar diferentes proyectos, ya que además de la gestión puede ayudar al encargado de la base de datos o al programador. </td>
                            <td>+52 311 126 3319</td>
                            <td>tic-270180@utnay.edu.mx</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Database Administrator</td>
                            <td>Roberto Flores</td>
                            <td>Database Administrator, es el encargado de gestionar la base de datos, desde la inserción de nuevos registros, eliminación y actualización de la base de datos.</td>
                            </td>
                            <td>+52 311 247 4532</td>
                            <td>tic-270184@utnay.edu.mx</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Programmer</td>
                            <td>Dario Silva</td>
                            <td>Programmer, encargado de la programación front end, actualiza y elimina elementos de la página web que serán o no, necesarios.</td>
                            <td>+52 311 331 6017</td>
                            <td>tic-270202@utnay.edu.mx</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Designer</td>
                            <td>Marian Alcantara</td>
                            <td>Designer, encargada de todo el diseño, desde los logotipos hasta el diseño general de la pagina web.   </td>
                            <td>+52 311 187 1903</td>
                            <td>tic-260005@utnay.edu.mx</td>
                        </tr>
                      </tbody>
                </table>
            </article> 
        </div>  
@endsection
