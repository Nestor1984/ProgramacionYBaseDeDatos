<?php
    /*if(isset($_POST['nomcliente'])) 
    { 
        $nombre = $_POST['nomcliente'];
        echo "Tu nombre es: ".$nombre;
    }*/
    require 'conexion.php';
    
    //$enviar=$_POST['enviar'];
    if(isset($_POST['enviar'])){
        $cliente=$_POST['nomcliente'];
        $consulta="select * from clientes where nombre like'%$cliente%' order by idcliente desc";
    }else{
        $consulta="select * from clientes order by idcliente desc";
    }
    //$consulta="select * from clientes where nombre like'%$cliente%'";
    $resultado=mysqli_query($conexion,$consulta) or die("Algo ha salido mal en la consulta");

    echo"<table class='listado'>";
    echo"<tr>";
    echo"<th>Id</th>";
    echo"<th>Nombre Cliente</th>";
    echo"<th>CI</th>";
    echo"<th>Direccion</th>";
    echo"<th>Telefono</th>";
    echo"<th>Email</th>";
    echo"</tr>";

    while($columna=mysqli_fetch_array($resultado)){
        echo"<tr>";
        //echo"<td><a href='resultado.php?idcliente=".$columna['idcliente']."'>".$columna['idcliente']."</a></td><td>".$columna['nombre']."</td><td>".$columna['ci']."</td><td>".$columna['direccion']."</td><td>".$columna['telefono']."</td><td>".$columna['email']."</td>";
        echo"<td><a href='resultado.php?idcliente=".$columna['idcliente']."'><img src='img/elimina.png'/>Eliminar </a> ".$columna['idcliente']."</td><td>".$columna['nombre']."</td><td>".$columna['ci']."</td><td>".$columna['direccion']."</td><td>".$columna['telefono']."</td><td>".$columna['email']."</td>";
        echo"</tr>";
    }

    echo"</table>";

    mysqli_close($conexion);
?>