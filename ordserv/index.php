<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimun-scale=1.0"/>
    <link rel="stylesheet" href="css/estilos.css"/>
    <title>Lista de empleados</title>
  </head>
  <body>
    <div class="main-container">
      <aside class="main-aside"><a href="https://utb.edu.bo/"><img src="img/logoutb.png" class="logo"/></a>
        <ul class="menu ed-menu">
          <li class="menu__item"><a href="listarempleados.php" class="menu__link icon-compras">Listar Empleados</a></li>
          <li class="menu__item"><a href="listarclientes.php" class="menu__link icon-ventas">Listar Clientes</a></li>
          <li class="menu__item"><a href="listarordservicios.php" class="menu__link icon-lista-compras">Listar Ordenes</a></li>
          <li class="menu__item"><a href=".php" class="menu__link icon-lista-ventas">Lista de ventas</a></li>
          <li class="menu__item"><a href="lista-productos.php" class="menu__link icon-lista-productos">Lista de productos</a></li>
        </ul>
      </aside>
      <main class="main-content">
        <h1> Listado de empleados</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <div class="ed-container">
                <div class="ed-item web-20">
                    <label for="registros">Buscar empleados:</label>
                </div>
                <div class="ed-item web-20">
                    <input type='text' name='nomempleado' id='nomempleado'>
                </div>
                <div class="ed-item web-15">
                    <input type="submit" name='enviar' value="Buscar"/>
                </div>
            </div>
        </form>
            <?php
                include 'buscarempleados.php';
            ?>
      </main>
    </div>
  </body>
</html>