<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <?php require('php/login.php'); ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/master.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body style="height:1500px">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#">P&B Storage</a>
      </div>
      <ul class="nav navbar-nav">
        <li><a href="index.php">Inicio</a></li>
        <li><a href="inventario.php">Inventario</a></li>
        <li><a href="proveedores.php">Proveedores</a></li>
        <li class="active"><a href="categoria.php">Categorias</a></li>
      </ul>
    </div>
  </nav>
  
  <div class="container" style="margin-top:50px">
    <h3>Clasificación de los Items</h3>
    <div class="row">
      <div class="col-md-4">
        <h5>Consultar clasificaciones</h5>
        <p>Consulta las clasificaciones.</p>
        <a href ="categoria_get.php"><button class="button">Consultar</button></a>
      </div>
      <div class="col-md-4"> 
        <h5>Eliminar Clasificaciones</h5>
        <p> Elimina las categorias que estén registrados.</p>
        <a href ="categoria_delete.php"><button class="button">Eliminar</button></a>
      </div>
      <div class="col-md-4"> 
        <h5>Añadir Clasificación</h5>
        <p>Registra una nueva categoría.</p> 
        <a href ="categoria_add.php"><button class="button">Añadir</button></a>
      </div>
    </div>
  </body>
</html>