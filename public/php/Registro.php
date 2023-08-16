<?php
    //Conexión a la BD
    include 'Conexion.php';
    //Pasamos los datos desde el controlador a variables PHP
    $nombre = mysqli_real_escape_string($conexion, $_POST['nombre']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $apellidos = mysqli_real_escape_string($conexion, $_POST['apellidos']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $correo = mysqli_real_escape_string($conexion, $_POST['correo']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $telefono = mysqli_real_escape_string($conexion, $_POST['telefono']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $usuario = mysqli_real_escape_string($conexion, $_POST['usuario']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $psw = mysqli_real_escape_string($conexion, $_POST['psw']); //Se utiliza este método PHP para evitar intección SQL a la BD
    //Se realiza una consulta para saber si el correo ya esta registrado en la BD
    $consulta = "SELECT * FROM usuario WHERE correo = '$correo'";
    $res_consulta = mysqli_query($conexion, $consulta);
    //Si el correo no esta registrado lo insertamos en la BD y regresamos 1
    if(mysqli_num_rows($res_consulta) == 0){
        //Guardamos en una variable la consulta en la BD para insertar datos
        $insertar = "INSERT INTO usuario(Nombre,Apellido,Correo,Telefono,Usuario,Contraseña) VALUES ('$nombre','$apellidos','$correo','$telefono','$usuario','$psw')";
        //Ejecutamos la consulta y el resultado de la insercion lo guardamos en una variable
        $res_insertar = mysqli_query($conexion,$insertar);
        //Si fallo la insercion avismamos al usuario, de lo contrario avisamos que el registro fue exitoso
        echo '1';
    }else{
        //Si el correo ya estaba registrado regresamos 0
        echo '0';
    }
    //Cerramos la conexión
    mysqli_close($conexion);
    
?>
