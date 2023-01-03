<?php
include "includes/cabecera.php";
include "includes/uni_conn.php";

if(isset($_GET['id_url']))
{
    $id_url = $_GET['id_url'];
    $consulta = "SELECT * FROM productos WHERE id_producto = '$id_url' ";
    $resultado = mysqli_query($conn, $consulta);

    if (!mysqli_num_rows($resultado)==1)
    {
        die("no encontro el registro en la base de datos");
    }
    else
    {
        $row = mysqli_fetch_array($resultado);
    }
}
?>
<div class="container"  id="contbody">
    <div class="row">
        <!--formulario-->
            <div class="col-md-4 ">
                <div class="card card-body">
                    <h3>Editar Producto</h3>
                    <form action="actualizar_producto.php" method="post" enctype="multipart/form-data">
                    <!-- id_alumno -->
                    <div class="form-group mb-2">
                        <input type="text" name="id_producto" class="form-control" value="<?php echo $row['id_producto'] ?>">
                    </div>
                    <!-- nombre -->
                    <div class="form-group mb-2">
                        <input type="text" name="nombre" class="form-control" value="<?php echo $row['nombre'] ?>">
                    </div>
                    <!-- imagen -->
                    <div class="form-group mb-2">
                    <label for=""><strong>imagen</strong></label>
                        <input type="file" name="foto" class="form-control" value="<?php echo $row['foto'] ?>">
                    </div>
                    <!-- button -->
                    <div class="form-group mb-2 mt-4">
                        <button class="btn btn-success form-control" name="editar_productos">Editar Producto</button>
                    </div>
                    
                    </form>
                </div>
            </div>
    </div>
</div>
<?php
include "includes/pie.php"
?>
