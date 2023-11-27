<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/estilos.css"/>
    <title>Lista de ordenes</title>
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
        <h1> Listado de ordenes</h1>
            <?php
                include 'ordenesservicio.php';
            ?>
      </main>
    </div>
  </body>
</html>