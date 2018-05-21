<?php
  // Conexão no banco de dados
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  $db_name = 'mascotmatch';
  $connection = mysqli_connect($host, $user, $pass, $db_name);
  if(!$connection){
    die('Não conectou ao banco de dados!');
  }
?>
