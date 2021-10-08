<?php

$pg = "proyectos";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="proyectos">
    <?php include_once("header.php"); ?>


    <main class="container">
        <div class="row bloquet">
            <div class="col-12 py-4">
                <h1>Proyectos</h1>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Los siguientes son algunos de los tranajos que he realizado:</h2>
                </div>
            </div>
            <div class="col-12 col-sm-4 bloque">
                <div class="row border border-dark m-1 bg-transparent">

                    <img src="imagenes/abmclientes.png" alt="ABM Clientes" class="img-fluid">

                    <div class="col-12 gradiente py-2">
                        <h2 class="text-center">ABM CLIENTES</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Alta, baja y modificacion de un registro de clientes. Realizado en HTML, CSS, PHP, Bootstrap
                            y Json.</p>
                    </div>

                    <div class="col-6 my-5 ps-5">
                        <a href="http://">Ver online</a>

                    </div>

                    <div class="col-6 my-5">
                        <a href="http://github.com">Codigo fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 bloque">
                <div class="row border border-dark m-1 bg-transparent">

                    <img src="imagenes/abmventas.png" alt="ABM Ventas" class="img-fluid">

                    <div class="col-12 gradiente py-2">
                        <h2 class="text-center">SISTEMA DE GESTION DE VENTAS</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Sistema de gestion de clientes, productos y ventas. Realizado en HTML, CSS, PHP, MVC,
                            Boostrap,
                            Js, Ajax, JQuery y MySQL de base de datos.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="http://">Ver online</a>

                    </div>
                    <div class="col-6 my-5">
                        <a href="http://github.com">Codigo fuente</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-4 bloque">
                <div class="row border border-dark m-1 bg-transparent">

                    <img src="imagenes/proyecto-integrador.png" alt="ABM Clientes" class="img-fluid">

                    <div class="col-12 gradiente py-2">
                        <h2 class="text-center">PROYECTO INTEGRADOR</h2>
                    </div>
                    <div class="col-12 pt-2">
                        <p>Proyecto Full Stack desarrollado en PHP, Laravel, Javascript, JQuery, AJAX, HTML, CSS,
                            Mercadopago con panel administrador, gestor de usuarios, modulo de permisos y
                            funcionalidades a
                            fines.</p>
                    </div>
                    <div class="col-6 my-5 ps-5">
                        <a href="http://">Ver online</a>

                    </div>
                    <div class="col-6 my-5">
                        <a href="http://github.com">Codigo fuente</a>
                    </div>
                </div>
            </div>
        </div>
    </main>


    <?php include_once("footer.php"); ?>
</body>

</html>