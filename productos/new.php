<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloForms.css" type="text/css" />
    <script language="JavaScript" type="text/javascript" src="js/funciones.js"></script>
    <script type="text/javascript" src="js/jquery-3.6.0.js"></script>
    
    <title>Document</title>
</head>
<body>
    <form action="#" id="formulario" method="POST">
        <div class="container">
            <div class="row principal">
            <h2>Agregar producto</h2>
            <p>Por favor llene este formulario para agregar un nuevo producto</p>
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

            <div class=row>
            <label for="marca"><b>Marca</b></label>
            <input type="text" placeholder="Ingrese la marca" id="marca" name="marca">
            </div>

            <div class=row>
            <label for="almacen"><b>Almacen</b></label>
            <input type="text" placeholder="Ingrese el almacen" id="almacen"name="almacen">
            </div>

            <div class=row>
            <label for="descripcion"><b>Descripcion</b></label>
            <input type="text" placeholder="Ingrese descripcion"id="descripcion" name="descripcion">
        </div>

            <div class=row>
            <label for="cantidad"><b>Cantidad</b></label>
            <input type="text" placeholder="Ingrese la cantidad"id="cantidad" name="cantidad">
        </div>

            <div class=row>
            <label for="precio"><b>Precio</b></label>
            <input type="text" placeholder="Ingrese el precio"id="precio" name="precio">
        </div>

            <div class=row>
            <label for="fecha"><b>Fecha</b></label>
            <input type="text" placeholder="Ingrese la fecha" id="fecha" name="fecha">
            </div>
            <hr>

            <input type="button" onclick="guardarProducto()" class="registerbtn" value="Agregar">
        </div>
    </form>

</body>
</html>