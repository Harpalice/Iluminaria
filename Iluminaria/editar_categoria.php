<?php
include "includes/cabecera.php";
include "includes/uni_conn.php";

if(isset($_GET['id_url']))
{
    $id_url = $_GET['id_url'];
    $consulta = "SELECT * FROM categoria WHERE id_categoria = '$id_url' ";
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
                    <h3>Editar Categoria</h3>
                    <form action="actualizar_categoria.php" method="post" enctype="multipart/form-data">
                    <!-- id_alumno -->
                    <div class="form-group mb-2">
                        <input type="text" name="id_categoria" class="form-control" value="<?php echo $row['id_categoria'] ?>">
                    </div>
                    <!-- nombre -->
                    <div class="form-group mb-2">
                        <input type="text" name="nombre_categoria" class="form-control" value="<?php echo $row['nombre_categoria'] ?>">
                    </div>
                    <!-- descripciohn -->
                    <div class="form-group mb-2">
                        <input type="text" name="descripcion" class="form-control" value="<?php echo $row['descripcion'] ?>">
                    </div>
                    <!-- imagen -->
                    <div class="form-group mb-2">
                    <label for=""><strong>imagen</strong></label>
                        <input type="file" name="foto" class="form-control" value="<?php echo $row['foto'] ?>">
                    </div>
                    <!-- button -->
                    <div class="form-group mb-2 mt-4">
                        <button class="btn btn-success form-control" name="editar_categoria">Editar Categoria</button>
                    </div>
                    
                    </form>
                </div>
            </div>
    </div>
</div>
<?php
include "includes/pie.php"
?>
