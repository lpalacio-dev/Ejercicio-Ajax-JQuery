<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloForms.css" type="text/css" />
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        
        <div class="container">
            <div class="row principal">
            <h2>Buscar producto</h2>
            <p>Por favor llene este formulario para buscar un producto</p>
            </div>
            <hr>

            <div class=row>
            <label for="codigo"><b>Codigo</b></label>
            <input type="text" placeholder="Introduce el codigo" id="codigo" name="codigo">
            </div>

            <div class=row>
            <label for="nombre"><b>Nombre</b></label>
            <input type="text" placeholder="Ingrese el nombre" id="nombre"name="nombre">
            </div>

            <input type="button" onclick="buscarProducto()" class="registerbtn" value="Buscar">
        </div>
    </form>

</body>
</html>