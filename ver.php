<?php
$id = $_GET['id'];
include "confing/bd.php";
$datos = ListarunAlumno($id);
$nombre = $datos['nombre'];
$email = $datos['email'];
$foto = $datos['foto'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Vista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body style = "background-color:#f0e68c">
    <div class="container">
        <div class="bg-ligth w-50 m-auto p-3">
            <div class=" p-2">
                <a class="btn btn-warning btn-lg " href="index.php">Inicio </a>
                <a class="btn btn-secondary btn-lg " href="editar.php?id=<?php echo $id ?>">Editar </a>
                <a class="btn btn-danger btn-lg " href="acciones/eliminar.php?id=<?php echo $id ?>">Eliminar </a>

            </div>
            <h3 class=text-center><?= $nombre ?></h3>
            <p><strong>Correo : </strong><?= $email ?></p>
            <center><img src="data:image/jpg;base64,<?= base64_encode($foto) ?>" </center>
        </div>

    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>