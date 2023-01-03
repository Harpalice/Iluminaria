<?php
include "includes/uni_conn.php";

// capturar lo que viene del formulario

if(isset($_POST['agregar_categoria']))
    {

        $nombre_categoria = $_POST['nombre_categoria'];
        $descripcion = $_POST['descripcion'];

        //imagen
        $name_foto = $_FILES['foto']['name'];
        $type_foto = $_FILES ['foto']['type'];
        $tem_img = $_FILES['foto']['tmp_name'];


        // insert into producto () values ();
            $consulta_sql = "INSERT INTO categoria (id_categoria, nombre_categoria, descripcion,foto) VALUES (NULL, '$nombre_categoria', '$descripcion', '$name_foto')";
         
            $resultado = mysqli_query($conn, $consulta_sql);

            if (isset($resultado))
            {
                move_uploaded_file($tem_img,'img/categoria/'.$name_foto);
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