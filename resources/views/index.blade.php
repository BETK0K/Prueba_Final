@extends('Plantilla')
@section('/')
    <div>
        <div class="mensaje">
            <h1>¡BIENVENIDO!</h1>  
        </div>
        <br>
        <br>

        <div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="4000">
                        <img src="Imagenes/Carrusel_1.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_2.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_3.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_4.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="Imagenes/Carrusel_5.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="Imagenes/Carrusel_6.png" class="d-block w-100" alt="...">
                    </div>
                </div>    
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> 

        <section id="root" class="main">
            <div>
                <h4 style="float: left">PARA ESCUCHAR TODA LA INFORMACIÓN, HACER CLICK</h4>
                <button id="play" class="btn1" style="display: none"><i class="fa fa-play"></i></button>
                <button id="pause" class="btn2" style="display: none"><i class="fa fa-pause"></i></button>
                <button id="stop" class="btn2" style="display: none"><i class="fa fa-stop"></i></button>

                <article class="ar" id="articulo">
                    <div>
                        <h3 style="float: left" id="speak">¿Qué es una Consultoría Web?</h3>
                        <p style="float: left" id="apeak">Una Consultoría web es uno de los elementos indispensables para conseguir una mayor presencia en internet. Se trata de un servicio desarrollado por profesionales, 
                        generalmente consultores web, para ver toda la estructura de una página, desde su posicionamiento hasta su diseño o su público, con el fin de poder determinar estrategias con las que crecer 
                        tanto dentro como fuera del ámbito digital, unos de los procedimiento por el que pasan todas las compañías que abren una página en Internet.</p>
                        
                        <p style="float: left" id="speak">Normalmente desarrollado por diferentes profesionales especializados en diferentes ámbitos, como puede ser el diseño web, posicionamiento SEO o incluso programación; 
                        ofrece a su web una serie de servicios orientados a aumentar el volumen de negocio de la empresa que lo solicita.</p>
                    </div>
                    <div>
                        <h3 style="float: left" id="speak">¿Para qué Sirve una Consultoría Web?</h3>
                        
                        <p style="float: left" id="speak">Una Consultoria web sirve, tal y como marca su meta primordial, para conseguir que cualquier empresa que la solicita pueda crecer en Internet y, así, aumentar su volumen de negocio y seguir 
                        creciendo gracias a un mayor y mejor alcance en el sector digital.</p>
                        
                        <p style="float: left" id="speak">No solo mejora todo lo relacionado con la web del negocio, también permite una mejor transmisión de la información a base 
                        de dictar una nueva línea de contenidos, plantea cambios en la imagen corporativa en caso de ser necesarios e incluso detecta qué mejoras se pueden aplicar para que el 
                        rendimiento de la página sea mayor, o lo que es lo mismo, que la experiencia de navegación sea más satisfactoria.</p>
                    </div>
                </article>
                <br>
                <br>
                <div>
                    <div class="logo fondoimg">
                        <img src="Imagenes/Redes.gif">
                    </div>
                    <div class="logo fondoimg1">
                        <img src="Imagenes/Redes1.gif">
                    </div>
                </div>
            </div>
        </section>
    </div>

    {{-- Script Carrusel --}}
    <!-- JavaScript Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
	<script src="js/Accesibilidad.js"></script>
    <script src="js/Validaciones.js"></script>
    <script src="js/Seleccionar_Texto.js"></script>
    <script src="js/Activar_Acce.js"></script>
@endsection