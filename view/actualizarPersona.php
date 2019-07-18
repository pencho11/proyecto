<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>CRUD - MVC - Personas</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/style.css">

    </head>

    <body>

        <div class="container">
            <h2>Formulario para actualizar registro</h2>
            <form action="index.php?m=actPersona" method="post">
                <label>Ingrese Id:</label>
                <input type="number" class="" name="txtid" required>
                <label>Ingrese Nombre:</label>
                <input type="text" class="" name="txtnombre1" required>
                <button type="submit" class="btn btn-dark">Enviar</button>
                <br><br>    

                <a href="index.php?m=''">&nbsp;Volver al inicio&nbsp;</a>
            </form>
            

        </div>
    </body>
</html>