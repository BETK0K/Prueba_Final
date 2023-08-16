<?php
    session_start();

    
        if($_SESSION['usuario'] == "Beto54721"){
            header(Location:"http://consultoria_web.test/estado");

        }else{
            header(Location:"http://consultoria_web.test/contactanos"); 
        }
  

?>