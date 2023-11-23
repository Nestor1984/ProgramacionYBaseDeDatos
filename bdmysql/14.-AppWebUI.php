<?php # 1
include "14.-HacerInsertUI.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="" method="post">
        Nombre de la tarea:
        <input type="text" name="tarea" id="tarea">
        <br>
        <input type="submit" value="Agregar">
    </form>

    <table>
        <thead> <!--thead: Es la cabecera de la tabla-->
            <tr>
                <th>#</th>
                <th>Tarea</th>
                <th>Accion</th>
            </tr>
        </thead>
        <?php foreach($datos as $dato){ ?>
            <tr>
                <td><?php echo $dato[0];?></td> <!--$dato[0]: es el id-->
                <td><?php echo $dato[1];?></td> <!--$dato[1]: es la tarea-->
                <td><a href="?id=<?php echo $dato[0];?>">[Borrar]</a></td>
            </tr>
        <?php } ?>
    </table>

</body>
</html>