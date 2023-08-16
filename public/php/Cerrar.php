<?php

    session_start();
    session_destroy();
    header("Location:http://consultoria_web.test/inicio_de_sesion");
?>