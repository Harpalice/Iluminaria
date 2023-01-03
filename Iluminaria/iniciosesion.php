<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css">

    <!----Fuente de letras--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="loginn.css">



</head>

<body id="body">
    <div class="container">
        <form action="usuario.php" method="post" id="form">

            <h1>Inicio sesion</h1>
            <input type="text" placeholder= "Ingrese su usuario" name="usuario" id="inp">
            <input type="password" placeholder="Ingrese su contraseña" name="contraseña" id="inp">
            <input type="submit" value="Ingresar" id="miboton">
        </form>
    </div>
</body>

</html>