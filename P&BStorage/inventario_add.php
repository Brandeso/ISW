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
          <li class="active"><a href="inventario.php">Inventario</a></li>
          <li><a href="proveedores.php">Proveedores</a></li>
          <li><a href="categoria.php">Categorias</a></li>
        </ul>
      </div>
    </nav>
      
    <div class="container" style="margin-top:50px">
      <h3>Inventario </h3>
      <div class="row">
        <div class="col-md-4">
          <h5>Consultar Inventario</h5>
          <p>Consulta aquí los items disponibles en tu inventario.</p>
          <a href="inventario_get.php"><button class="button">Consultar</button></a>
        </div>
        <div class="col-md-4"> 
          <h5>Eliminar Items</h5>
          <p>¿Hubo error al capturar los datos del inventario? Entra aquí para eliminar los datos mal capturados.</p>
          <a href="inventario_delete.php"><button class="button">Eliminar</button></a>
        </div>
        <div class="col-md-4"> 
          <h5>Añadir Items</h5>
          <p>Entre aquí para añadir nuevos items a sus inventarios.</p>
          <a href="inventario_add.php"><button class="button">Añadir</button></a>
        </div>
      </div>
    <hr>
    <h1> Añadir items al inventario. </h1>
    <form>
      <div class="form-group">
        <label for="exampleFormControlInput1">Nombre</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Nombre del Item">
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect1">Example select</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">Example multiple select</label>
        <select multiple class="form-control" id="exampleFormControlSelect2">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Example textarea</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
    </form>
  </body>
</html>