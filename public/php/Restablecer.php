<?php 
    
    include 'Conexion.php';
    
    $correo =$_POST['correo'];
    $bytes = random_bytes(5);
    $token =bin2hex($bytes);

    include 'EnviarCorreo.php';

    if($enviado){
        //Guardamos en una variable la consulta en la BD para insertar datos
        $insertar = "INSERT INTO contraseña(email,token,codigo) VALUES ('$correo','$token','$codigo')";

        //Ejecutamos la consulta y el resultado de la insercion lo guardamos en una variable
        $res_insertar = mysqli_query($conexion,$insertar);

        //Si fallo la insercion avismamos al usuario, de lo contrario avisamos que el correo fue exitoso
        echo '1';

    }else{
        //Si el correo no estaba registrado regresamos 0
        echo '0';
    }

    //Cerramos la conexión
    mysqli_close($conexion);
    
?>