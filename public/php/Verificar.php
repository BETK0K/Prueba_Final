<?php 
    include 'Conexion.php';

    $correo = mysqli_real_escape_string($conexion, $_POST['correo']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $token = mysqli_real_escape_string($conexion, $_POST['token']); //Se utiliza este método PHP para evitar intección SQL a la BD
    $codigo = mysqli_real_escape_string($conexion, $_POST['codigo']); //Se utiliza este método PHP para evitar intección SQL a la BD

    $consulta = "SELECT * FROM contraseña WHERE email='$correo' and token='$token' and codigo='$codigo'";
    $res_consulta = mysqli_query($conexion, $consulta);

    if(mysqli_num_rows($res_consulta) > 0){
        $fila = mysqli_fetch_row($res_consulta);
        $fecha =$fila[4];
        $fecha_actual=date("Y-m-d h:m:s");
        $seconds = strtotime($fecha_actual) - strtotime($fecha);
        $minutos=$seconds / 60;
        echo '1';
    }else{
        
        echo '0';
    }
    //Cerramos la conexión
    mysqli_close($conexion);

?>
