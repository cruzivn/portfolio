<?php

$pg = "inicio";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="inicio">
    <?php include_once("header.php"); ?>
    <main class="container text-center">
        <div class="row">

            <div class="col-12 my-4">
                <img src="../portfolio/imagenes/cohete.svg" alt="cohete">
            </div>
            <div class="col-12">
                <p>Hola mi nombre es Ivan, soy desarrollador full Stack.</p>
            </div>

            <div class="col-12 py-5">
                <a href="proyectos.html">conoce mis proyectos</a>
            </div>
        </div>
    </main>

    <?php include_once("footer.php"); ?>
</body>