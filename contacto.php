<?php

$pg = "contacto";

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

</head>

<body id="contacto">
    <?php include_once("header.php"); ?>


    <main class="container">
        <div class="tabla row">
            <div class="col-sm-6 py-4">
                <h1>Contacto</h1>
            </div>
            <div class="col-sm-6 py-4">
                <h1>Deja tu mensaje :</h1>
            </div>
            <div class="row">
                <div class="col-12 col-sm-6">
                    <p>Te invito a que te contactes por estos medios.</p>
                    <div class="row py-4">
                        <div class="d-flex py-3">
                            <i class="fas fa-user"></i>
                            <div class="ps-3">
                                <h2 class="m-0">Nombre :</h2>
                                <p class="m-0">Cruz Ivan</p>
                            </div>
                        </div>
                        <div class="d-flex py-3">
                            <i class="fas fa-map-marker-alt"></i>
                            <div class="ps-3">
                                <h2 class="m-0">Direccion :</h2>
                                <p class="m-0">Bs.As. ,Argentina</p>
                            </div>
                        </div>
                        <div class="d-flex py-3">
                            <i class="fas fa-envelope"></i>
                            <div class="ps-3">
                                <h2 class="m-0">Email :</h2>
                                <p class="m-0"><a href="mailto:cruz.1234.lol@gmail.com" target="_blank" title="email">cruz.1234.lol@gmail.com</a></p>
                            </div>
                        </div>
                        <div class="d-flex py-3">
                            <i class="fas fa-phone-alt"></i>
                            <div class="ps-3">
                                <h2 class="m-0">Celular :</h2>
                                <p class="m-0">+54 11 3115-9759</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <form action="" method="post">
                        <div>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control mb-3" placeholder="Nombre:">
                        </div>
                        <div>
                            <input type="email" name="txtCorreo" id="txtCorreo" class="form-control mb-3" placeholder="Correo:">
                        </div>
                        <div>
                            <input type="tel" name="txtTelefono" id="txtTelefono" class="form-control mb-3" placeholder="Telefono/Whatsapp:">
                        </div>
                        <div>
                            <textarea name="txtMensaje" id="txtMensaje" cols="30" rows="10" class="form-control mb-3" placeholder="Escribe aqui tu mensaje:"></textarea>
                        </div>
                        <div class="mb-3">
                            <button type="submit" id="btnEnviar" name="btnEnviar" class="btn">ENVIAR</button>
                        </div>
                    </form>

                </div>


            </div>
        </div>

    </main>


    <?php include_once("footer.php"); ?>

    
</body>

</html>