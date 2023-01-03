<?php 
    include "includes/uni_conn.php";

    echo "eliminar categoria: ";

    // capturar la informacion del producto a eliminar
    if (isset($_GET['id_url'])){

        $id_a_eliminar = $_GET ['id_url'];
        echo $id_a_eliminar;

        $consulta_sql = "DELETE FROM `categoria` WHERE  id_categoria ='$id_a_eliminar'";
        $resultado = mysqli_query($conn, $consulta_sql);

        if ($resultado==true){
            header("location:index_administrador.php");
        }
        
       
    }
?>