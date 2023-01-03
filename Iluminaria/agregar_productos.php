<?php
include "includes/uni_conn.php";

// capturar lo que viene del formulario

if(isset($_POST['agregar_productos']))
    {

        $nombre = $_POST['nombre'];
        $id_categoria = $_POST['id_categoria'];

        //imagen
        $name_foto = $_FILES['foto']['name'];
        $type_foto = $_FILES ['foto']['type'];
        $tem_img = $_FILES['foto']['tmp_name'];


        // insert into producto () values ();
            $consulta_sql = "INSERT INTO productos (id_producto, nombre, foto, id_categoria) VALUES (NULL, '$nombre', '$name_foto', '$id_categoria')";
         
            $resultado = mysqli_query($conn, $consulta_sql);

            if (isset($resultado))
            {
                move_uploaded_file($tem_img,'img/productos/'.$name_foto);
                header("location:index_administrador.php");
            }
            else
            {
                echo "algo salio mal";
            }
            }
    else
    {
        echo "Todo Mal";
    }
