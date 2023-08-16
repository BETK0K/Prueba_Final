<?php
include 'Conexion.php';
$usuario=$_POST['usuario'];
$psw=$_POST['psw'];
session_start();
$_SESSION['usuario']=$usuario;

$consulta = "SELECT * FROM usuario where Usuario='$usuario' and Contraseña='$psw'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    echo "1";
}else{
    echo "0";
}
mysqli_free_result($resultado);
mysqli_close($conexion);