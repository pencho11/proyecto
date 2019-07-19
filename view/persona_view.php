<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Proyecto grupo</title>
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css"> -->
        <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->
        <link rel="stylesheet" href="css/estilosmvc.css">

    </head>

    <body>
        <div class="contenedor">
            <header>
                <div class="logo">
                    <img src="imagenes/logo.png" alt="">
                </div>
                <nav class="menu">
                    <a href="index.php?m=persona">Nuevo Registro</a>
                    <a href="index.php?m=ePersona">Eliminar Registro</a>
                    <a href="index.php?m=aPersona">Actualizar Registro</a>
                </nav>
            </header>
            <section class="main">
                <article>

            <!-- <div class="row">
                <div class="col-md-12"> -->
                    <h2>Registro de personas</h2>
                    <table>
                        <!-- <thead> -->
                            <tr>
                                <th>Id</th>
                                <!-- <td></td> -->
                                <th> Nombre </th>

                        <!-- </thead> -->
                        <!-- <tbody> -->
                            <?php foreach ($query as $data): ?>
                            <tr>
                                <td><?php echo $data['id'] ?> </td>
                                <!-- <td></td> -->

                                <td><?php echo $data['nombre'] ?> </td>

                            </tr>
                            </tr>
                            <?php endforeach;?>
                        <!-- </tbody> -->
                    </table>

                <!-- </div>
            </div> -->
                </article>
            </section>
            <aside>
                <div class="ad">Add</div>
                <div class="ad">Add</div>
            </aside>

            <footer>
                <div class="autor">
                    <p>Copyright © 2019 - Proyecto grupo</p>
                </div>
                <div class="redes-sociales">
                    <a href="#">Facebook</a>
                    <a href="#">Twiter</a>
                </div>
            </footer>
           <!--  <script src="../js/bootstrap.js"></script>
            <script src="../js/jquery-3.4.1.js"></script> -->
        </div>
    </body>

</html>
