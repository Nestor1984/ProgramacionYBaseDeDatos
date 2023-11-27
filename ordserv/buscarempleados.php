<?php
    include 'conexion.php';
    
    if(isset($_POST['enviar'])){
        $empleado=$_POST['nomempleado'];
        $consulta="select * from empleados where nombre like'%$empleado%' order by idempleado desc";
    }else{
        $consulta="select * from empleados order by idempleado desc";
    }
    
    $resultado=mysqli_query($conexion,$consulta) or die("Algo ha salido mal en la consulta");

    echo"<table class='listado'>";
    echo"<tr>";
    echo"<th>Id</th>";
    echo"<th>Nombre Empleado</th>";
    echo"<th>CI</th>";
    echo"<th>Direccion</th>";
    echo"<th>Telefono</th>";
    echo"<th>Email</th>";
    echo"<th>Contraseña</th>";
    echo"</tr>";

    while($columna=mysqli_fetch_array($resultado)){
        echo"<tr>";
        echo"<td>".$columna['idempleado']."</td><td>".$columna['nombre']."</td><td>".$columna['ci']."</td><td>".$columna['direccion']."</td><td>".$columna['telefono']."</td><td>".$columna['email']."</td><td>".$columna['contrasenia']."</td>";
        echo"</tr>";
    }

    echo"</table>";

    mysqli_close($conexion);
?>