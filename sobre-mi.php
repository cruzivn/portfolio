<?php

$pg = "sobre-mi";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">

    <?php include_once("header.php"); ?>
    <main>
        <div class="container tabla">
            <div class="row">
                <div class="col-12 col-sm-7">
                    <h1 class="py-4">
                        Sobre mi
                    </h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, accusantium odit dolores esse
                        dicta omnis odio saepe hic in, nemo doloribus recusandae quae fuga ad repellat, expedita error
                        totam aspernatur.</p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure dolore at debitis? Eaque ea
                        voluptates facere, quis est distinctio voluptas quasi id, explicabo veniam quo! Quaerat rem
                        perferendis repellendus ad!
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla nihil enim laborum! Deserunt id
                        ratione optio hic eligendi obcaecati quas quae. Vitae esse exercitationem hic officia veniam
                        cumque velit sed?
                    </p>
                </div>
                <div class="col-12 col-sm-5 py-4 px-5">
                    <img src="../portfolio/imagenes/mifoto.jpeg" alt="mifoto" class="rounded-circle">

                </div>
                <div class="container text-center">
                    <div class="row align-items-end py-4">
                        <div class="col-12 col-sm-6">
                            <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                            <a href="https://www.linkedin.com" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>

                        </div>

                    </div>

                </div>
            </div>
        </div>


        <section id="tecnologias" class="py-5">
            <div class="container">
                <div class="row py-3">
                    <div class="col-12">
                        <h2>Tecnologias de programacion</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/jquery-logo.png" alt="jquery" class="img-fluid">
                        <div class="col-12">
                            <h3>JQUERY</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/html.png" alt="html" class="img-fluid">
                        <div class="col-12">
                            <h3>HTML</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/css.png" alt="css" class="img-fluid">
                        <div class="col-12">
                            <h3>CSS</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/javascript-logo.png" alt="javascript" class="img-fluid">
                        <div class="col-12">
                            <h3>JAVASCRIPT</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/php-logo.png" alt="php" class="img-fluid">
                        <div class="col-12">
                            <h3>PHP</h3>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/bootstrap-logo.jpg" alt="bootstrap" class="img-fluid">
                        <div class="col-12">
                            <h3>BOOTSTRAP</h3>
                        </div>
                    </div>
                </div>



                <div class="row py-3">
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/react-logo.png" alt="react" class="img-fluid">
                        <div class="col-12">
                            <h4>REACT</h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/laravel.png" alt="laravel" class="img-fluid">
                        <div class="col-12">
                            <h4>LARAVEL</h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/mysql.png" alt="mysql" class="img-fluid">
                        <div class="col-12">
                            <h4>MYSQL</h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/git.png" alt="git" class="img-fluid">
                        <div class="col-12">
                            <h4>GIT</h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/xampp.png" alt="xampp" class="img-fluid">
                        <div class="col-12">
                            <h4>XAMPP</h4>
                        </div>
                    </div>
                    <div class="col-12 col-sm-2"><img src="../portfolio/imagenes/sin-logo.png" alt="sin-logo" class="img-fluid">
                        <div class="col-12">
                            <h4>SIN LOGO</h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="experiencias" class="pt-5">
            <div class="container">
                <div class="row py-5 ms-3">
                    <div class="d-flex">
                        <i class="fas fa-briefcase"></i>
                        <div class="col-12 ps-5 mt-4">
                            <h1 class="m-0">Experiencia laboral</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <article class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="../portfolio/imagenes/ivi.jpeg" alt="ivi" class="rounded-circle">
                                    <div class="ps-3">
                                        <h2 class="m-0">IVI</h2>
                                        <h4 class="m-0">Fecha de inicio/fin</h4>
                                        <p class="m-0">Lorem.</p>
                                        <p class="m-0">Lorem, ipsum.</p>
                                        <p class="m-0">Lorem, ipsum dolor.</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-6">
                        <article class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="../portfolio/imagenes/rappi.png" alt="rappi" class="rounded-circle">
                                    <div class="ps-3">
                                        <h2 class="m-0">RAPPI</h2>
                                        <h4 class="m-0">09/06/21 - 15/09/21</h4>
                                        <br>
                                        <p class="m-0">.Repartidor</p>
                                        <br>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </section>


        <section id="estudios">
            <div class="container">
                <div class="row py-5 ms-2">
                    <div class="d-flex">
                        <i class="fas fa-graduation-cap"></i>
                        <div class="col-12 ps-4 mt-4">
                            <h1>Estudios</h1>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <article class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="../portfolio/imagenes/volta.jpg" alt="volta">
                                    <div class="ps-3">
                                        <h2 class="m-0">E.T. N??19 - Alejandro Volta</h2>
                                        <h4 class="m-0">2009 - 2015</h4>
                                        <br>
                                        <p class="m-0">.Tecnico en Electronica</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-6">
                        <article class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="../portfolio/imagenes/cic.png" alt="cic" class="rounded-circle">
                                    <div class="ps-3">
                                        <h2 class="m-0">C.I.C.</h2>
                                        <h4 class="m-0">2016</h4>
                                        <br>
                                        <p class="m-0">.Bartender</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="row pt-3">
                    <div class="col-6">
                        <article class="card">
                            <div class="card-body">
                                <div class="d-flex">
                                    <img src="../portfolio/imagenes/boston.webp" alt="boston">
                                    <div class="ps-3">
                                        <h2 class="m-0">Boston</h2>
                                        <h4 class="m-0">05/04/2021</h4>
                                        <br>
                                        <p class="m-0">.Reparacion y Armado de Pc</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </section>


    </main>


    <div class="whatsapp">
        <a href="https://api.whatsapp.com/send?phone=541131159759" target="_blank" title="Enviar mensaje directo Whatsapp"><i class="fab fa-whatsapp"></i></a>
    </div>
    <script src="css/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>