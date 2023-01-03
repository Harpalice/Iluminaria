<?php
include "includes/uni_conn.php";

if(isset($_POST['editar_categoria']))
    {   
        $id_categoria = $_POST['id_categoria'];
        $name_categoria = $_POST['nombre_categoria'];
        $descripcion = $_POST['descripcion'];

        // imagen
        $name_foto = $_FILES['foto']['name'];
        $type_foto = $_FILES['foto']['type'];
        $tem_img = $_FILES['foto']['tmp_name'];

        $consulta = "UPDATE categoria SET nombre_categoria = '$name_categoria', foto = '$name_foto', descripcion = '$descripcion' WHERE id_categoria = $id_categoria";
        
    $res = mysqli_query($conn, $consulta);

    if (isset($res))
    {
        move_uploaded_file($tem_img,'img/categoria/'.$name_foto);
        header("location:index_administrador.php");
    }
    else
    {
        echo "algo salio mal";
    }
    }


?>