<?php 
  $server = 'localhost';
  $user = 'admin';
  $pass = 'linux';
  $db = 'pnbstorage';

  $conn = new mysqli($server, $user, $pass, $db);

  if($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
  } else {
    Console.log('Conexion exitosa');
  }

?>