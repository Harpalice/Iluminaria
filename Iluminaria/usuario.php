<?php
include "includes/uni_conn.php";

$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

$consulta= "SELECT * FROM usuario  where usuario = '$usuario' and contraseña = '$contraseña'";

$resultado = mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index_administrador.php");

}else{
    ?>
    <?php
    include("iniciosesion.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);

