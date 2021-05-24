<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estiloForms.css" type="text/css"/>
    
    <title>Document</title>
</head>
<body>
    <div class="resultado">
        <?php
            $codigo= $_POST['codigo'];
            $nombre= $_POST['nombre'];
            echo "<span>Se ha eliminado el producto $nombre con el codigo $codigo</span";
        ?>
   </div>

</body>
</html>