<?php 
    include 'Conexion.php';

    $correo = mysqli_real_escape_string($conexion, $_POST['correo']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $nueva = mysqli_real_escape_string($conexion, $_POST['nueva']); //Se utiliza este método PHP para evitar intección SQL a la BD
    
    $consulta = "SELECT * FROM usuario WHERE correo = '$correo'";
    $res_consulta = mysqli_query($conexion, $consulta);
   
    if(mysqli_num_rows($res_consulta) > 0){
        $actualizar = "UPDATE usuario SET Contraseña = '$nueva' WHERE Correo = '$correo'";

        $res_actualizar = mysqli_query($conexion,$actualizar);
        echo '1';
    }else{
        echo '0';
    }
    //Cerramos la conexión
    mysqli_close($conexion);
?>