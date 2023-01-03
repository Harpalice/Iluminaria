<?php
include "includes/uni_conn.php";

if(isset($_POST['editar_productos']))
    {
        $id_producto = $_POST['id_producto'];
        $name_uptade = $_POST['nombre'];

        // imagen
        $name_foto = $_FILES['foto']['name'];
        $type_foto = $_FILES['foto']['type'];
        $tem_img = $_FILES['foto']['tmp_name'];

        $consulta = "UPDATE productos SET nombre = '$name_uptade', foto = '$name_foto' WHERE id_producto = '$id_producto'";
        
    $res = mysqli_query($conn, $consulta);

    if (isset($res))
    {
        move_uploaded_file($tem_img,'img/productos/'.$name_foto);
        header("location:index_administrador.php");
    }
    else
    {
        echo "algo salio mal";
    }
    }


?>