<?php
  // Include do banco de dados e conexão
  include 'db.php';
  include 'erros.php';

  // Função de cadastro de usuário
  function registrar()
  {
    global $connection;
    if (isset($_POST['registrar'])) {
      $nome = ucwords( strtolower( $_POST['nome'] ) );
      $email = strtolower( trim( $_POST['email'] ) );
      $senha = $_POST['senha'];
      $confirmarsenha = $_POST['confirmar-senha'];

      if (strlen( trim( $nome ) ) < 5) {
        echo danger("Informe o nome corretamente!");
      } elseif (strlen( trim( $email ) ) < 8 && strstr("@", $email)) {
        echo danger("Informe corretamente seu email!");
      } elseif ( strlen(trim( $senha ) ) < 6){
        echo danger("Informe uma senha com <strong>mais de 6 caracteres</strong>!");
      } elseif (strlen( trim( $confirmarsenha ) ) < 6) {
        echo danger("Informe corretamente a confirmação da senha!");
      } else {
        $query = "SELECT * FROM usuario WHERE email = '$email'";
        $select_usuario = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_usuario)) {
          $db_email = $row['email'];
        }
        if (isset($db_email) && $email == $db_email) {
          echo warning("Este email já está cadastrado!");
        } else {
          if($senha == $confirmarsenha){
            $query = "INSERT INTO usuario (nome, email, senha) VALUES ('$nome', '$email', '$senha')";
            $resultado = mysqli_query($connection, $query);
            if (!$resultado) {
              die('Não deu certo!');
            } else {
              session_start();
              $_SESSION['email'] = $email;
              $_SESSION['senha'] = $senha;
              header('Location: inicial.php');
            }
          } else {
            echo danger("As senhas não conferem!");
          }
        }
      }
    }
  }

  // Função de login do usuário
  function logar()
  {
    global $connection;
    if (isset($_POST['logar'])) {
      $email = $_POST['email'];
      $senha = $_POST['senha'];

      $query = "SELECT * FROM usuario WHERE email = '$email'";
      $select_usuario = mysqli_query($connection, $query);
      while ($row = mysqli_fetch_assoc($select_usuario)) {
        $db_email = $row['email'];
        $db_senha = $row['senha'];
      }
       if ((isset($db_email) && isset($db_senha)) && ($email == $db_email && $senha == $db_senha)) {
        session_start();
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header('Location: inicial.php');
      } elseif ((isset($db_email) && isset($db_senha)) && ($email != $db_email || $senha != $db_senha)) {
        echo warning("Email / senha incorretos!");
      } else {
        echo danger("Email não encontrado!");
      }
    }
  }
?>
