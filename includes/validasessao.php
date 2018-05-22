<?php
  include 'db.php';
  session_start();
  function valida()
  {
    global $connection;
    if(isset($_SESSION['email'])){
      $session_username = $_SESSION['email'];
      $session_password = $_SESSION['senha'];
      $username = mysqli_real_escape_string($connection, $session_username);
      $password = mysqli_real_escape_string($connection, $session_password);
      $query = "SELECT * FROM usuario WHERE email = '$username'";
      $select_usuario = mysqli_query($connection, $query);
      while ($row = mysqli_fetch_assoc($select_usuario)) {
        $db_email = $row['email'];
        $db_password = $row['senha'];
      }
      if ($username !== $db_email && $password !== $db_password) {
        session_destroy();
        return false;
      } elseif ($username == $db_email && $password == $db_password) {
        return true;
      } else {
        session_destroy();
        return false;
      }
    } else {
      return false;
    }
  }
?>
