<?php
    include 'conexion.php';
    $consulta="select o.idos,o.fecha,o.situacion,o.equipo,o.servicio,o.costo,c.nombre,e.nombre from ordservicios as o inner join empleados as e on o.idempleado=e.idempleado inner join clientes as c  on c.idcliente=o.idcliente order by idos desc";
    $resultado=mysqli_query($conexion,$consulta) or die("Algo ha salido mal en la consulta");

    echo"<table class='listado'>";
    echo"<tr>";
    echo"<th>Id OS</th>";
    echo"<th>Fecha</th>";
    echo"<th>Situacion</th>";
    echo"<th>Equipo</th>";
    echo"<th>Servicio</th>";
    echo"<th>Costo</th>";
    echo"<th>Cliente</th>";
    echo"<th>Empleado</th>";
    echo"</tr>";

    while($columna=mysqli_fetch_array($resultado)){
        echo"<tr>";
        //echo"<td>".$columna[0]."</td><td>".$columna[1]."</td><td>".$columna[2]."</td><td>".$columna[3]."</td><td>".$columna[4]."</td><td>".$columna[5]."</td><td>".$columna[6]."</td><td>".$columna[7]."</td>";
        echo"<td>".$columna[0]."</td><td>".$columna[1]."</td><td>".$columna[2]."</td><td>".$columna[3]."</td><td>".$columna[4]."</td><td>".$columna[5]."</td><td>".$columna[6]."</td><td>".$columna[7]."</td>";
        echo"</tr>";
    }

    echo"</table>";

    mysqli_close($conexion);
?>