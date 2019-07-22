<!DOCTYPE HTML5>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <title>Detalle factura</title>
        <!--        <script type="text/javascript" src="css/factura.css"></script>-->
        <!--        <link rel="stylesheet" type="text/css" href="css/style.css">-->

        <link rel="stylesheet" href="../../css/factura.css">
    </head>

    <body>
        <!--background="a1.jpg"-->
        <div class="contenedor">
            <header>
                <div class="logo">
                    <img src="../../imagenes/logo.png" alt="">
                </div>
                <div class="menu">
                    <a href="#">blog</a>
                    <a href="#">Contactenos</a>
                </div>
            </header>
            <section class="main">
                <article>
                    <h2>Detalle Factura</h2>
                    <table>
                        <tr>
                            <th>ID Factura</th>
                            <th>ID Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                        <tr>
                            <td>
                                <!Generamos un numero aleatorio para ser el # de Factura,este no se repite---->
                                <?php
                                $numeros = range(1,10);
                                shuffle ($numeros);
                                foreach ($numeros as $numeros) {
                                    echo "$numeros";
                                }
                                ?>
                            </td>
                            <td id="idproducto">001</td>
                            <td id="precioproducto">1000</td>
                            <td id="cantidadxproducto">
                            <input class="btn btn-outline-success" type="number" name="txtnumero" id="txtnumero" required>
                            </td>
                            <td id="preciofinal">4000</td>
                        </tr>
                        </tr>
                    </table>
                    <input class="btn btn-outline-info1" type="button" onclick="selecionador($('#btnprecioxcantidad').val());return false;" name="btnprecioxcantidad" id="btnprecioxcantidad" value="Calcular Subtotal">
                </article>
            </section>
            <aside>
                <div class="ad">Add</div>
                <div class="ad">Add</div>
            </aside>
            <footer>
                <div class="autor">
                    <p>Copyright © 2019 - creado por Diego Miguel Ruben</p>
                </div>
                <div class="redes-sociales">
                    <a href="#">Facebook</a>
                    <a href="#">Twiter</a>
                </div>
            </footer>

        </div>

    </body>



</html>
