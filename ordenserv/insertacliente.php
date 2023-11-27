<?php
    include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/estilos.css"/>
    <title>Lista de clientes</title>
  </head>
<body>
<div class="main-container">
      <aside class="main-aside"><a href="https://utb.edu.bo/"><img src="img/logoutb.png" class="logo"/></a>
        <ul class="menu ed-menu">
          <li class="menu__item"><a href="listarempleados.php" class="menu__link icon-compras">Listar Empleados</a></li>
          <li class="menu__item"><a href="listarclientes.php" class="menu__link icon-ventas">Listar Clientes</a></li>
          <li class="menu__item"><a href="listarordservicios.php" class="menu__link icon-lista-compras">Listar Ordenes</a></li>
          <li class="menu__item"><a href="insertacliente.php" class="menu__link icon-lista-ventas">Inserta clientes</a></li>
          <li class="menu__item"><a href="insertaempleados.php" class="menu__link icon-lista-productos">Inserta empleados</a></li>
        </ul>
      </aside>
      <main class="main-content">
        <h1> Inserta clientes</h1>
        <form id="form1" name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Nombre:<input name="nombre" type="text" id="nombre" />
            CI:<input name="ci" type="text" id="ci" />
            Direccion:<input name="direccion" type="text" id="direccion" />
            Telefono:<input name="telefono" type="text" id="telefono" />
            Email:<input name="email" type="text" id="email" />
            <input type="submit" name="submit" value="Guardar" />
        </form>

        <?php
        if(isset($_POST['submit'])){
            $nombre=$_POST['nombre'];
            $ci=$_POST['ci'];
            $direccion=$_POST['direccion'];
            $telefono=$_POST['telefono'];
            $email=$_POST['email'];

            $consulta="insert into clientes(nombre,ci,direccion,telefono,email) values('$nombre',' $ci','$direccion','$telefono','$email')";
            $resultado=mysqli_query($conexion,$consulta) or die("Algo ha salido mal en la consulta");
            echo "Registro añadido";
        
        }else{
        //echo "Ha sucedido un Error.";
        }

        ?>       
      </main>
    </div>

   
</body>
</html>