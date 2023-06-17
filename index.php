<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="Estilos.css" rel="Stylesheet">
 </head>
 <body>
 <?php  
   
    $pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
    $conexion = new PDO('mysql:host=localhost;dbname=Final_0907_23_13067', 'root', '0410', $pdo_options);

    $select = $conexion->query("SELECT codigo, nombre, precio, existencia FROM productos");
     
    ?> 

    <table border="1" class="tabla">
        <thead>
            <tr>
                <th>Codigo</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Existencia</th>
            </tr>
        </thead>

        <tbody>
         <?php foreach($select->fetchAll() as $producto) { ?>
            <tr>
                <td> <?php echo $producto["codigo"] ?> </td>
                <td> <?php echo $producto["nombre"] ?> </td>
                <td> <?php echo $producto["precio"] ?> </td>
                <td> <?php echo $producto["existencia"] ?> </td>
                    </form>
                 </td>
            </tr>
          <?php } ?>
         </tbody>
         </table>
 </body>
</html>
