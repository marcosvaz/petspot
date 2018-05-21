<?php
  // Include do banco de dados e conexão
  include 'db.php';

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
        echo
        '<div class="alert alert-danger fixed-bottom" role="alert">' .
          '<div class="container">' .
            '<div class="alert-icon">	<i class="now-ui-icons objects_support-17"></i>' .
            '</div>	Informe o nome corretamente!' .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
              '<i class="now-ui-icons ui-1_simple-remove"></i>' .
            '</span>' .
            '</button>' .
          '</div>' .
        '</div>';
      } elseif (strlen( trim( $email ) ) < 8 && strstr("@", $email)) {
        echo
        '<div class="alert alert-danger fixed-bottom" role="alert">' .
          '<div class="container">' .
            '<div class="alert-icon">	<i class="now-ui-icons objects_support-17"></i>' .
            '</div>	Informe corretamente seu email!' .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
              '<i class="now-ui-icons ui-1_simple-remove"></i>' .
            '</span>' .
            '</button>' .
          '</div>' .
        '</div>';
      } elseif ( strlen(trim( $senha ) ) < 6){
        echo
        '<div class="alert alert-danger fixed-bottom" role="alert">' .
          '<div class="container">' .
            '<div class="alert-icon">	<i class="now-ui-icons objects_support-17"></i>' .
            '</div> Informe uma senha com <strong>mais de 6 caracteres</strong>!' .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
              '<i class="now-ui-icons ui-1_simple-remove"></i>' .
            '</span>' .
            '</button>' .
          '</div>' .
        '</div>';
      } elseif (strlen( trim( $confirmarsenha ) ) < 6) {
        echo
        '<div class="alert alert-danger fixed-bottom" role="alert">' .
          '<div class="container">' .
            '<div class="alert-icon">	<i class="now-ui-icons objects_support-17"></i>' .
            '</div> Informe corretamente a confirmação da senha!' .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
              '<i class="now-ui-icons ui-1_simple-remove"></i>' .
            '</span>' .
            '</button>' .
          '</div>' .
        '</div>';
      } else {
        $query = "SELECT * FROM usuario WHERE email = '$email'";
        $select_usuario = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_usuario)) {
          $db_email = $row['email'];
        }
        if (isset($db_email) && $email == $db_email) {
          echo
          '<div class="alert alert-warning fixed-bottom" role="alert">' .
          	'<div class="container">' .
          		'<div class="alert-icon">	<i class="now-ui-icons ui-1_bell-53"></i>' .
          		'</div>	Este email já está cadastrado!' .
          		'<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
  							'<i class="now-ui-icons ui-1_simple-remove"></i>' .
  						'</span>' .
          		'</button>' .
          	'</div>' .
          '</div>';
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
            echo
            '<div class="alert alert-danger fixed-bottom" role="alert">' .
            	'<div class="container">' .
            		'<div class="alert-icon">	<i class="now-ui-icons objects_support-17"></i>' .
            		'</div>	As senhas não conferem!' .
            		'<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
    							'<i class="now-ui-icons ui-1_simple-remove"></i>' .
    						'</span>' .
            		'</button>' .
            	'</div>' .
            '</div>';
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
        echo
        '<div class="alert alert-warning fixed-bottom" role="alert">' .
          '<div class="container">' .
            '<div class="alert-icon">	<i class="now-ui-icons ui-1_bell-53"></i>' .
            '</div>	Email / senha incorretos!' .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
              '<i class="now-ui-icons ui-1_simple-remove"></i>' .
            '</span>' .
            '</button>' .
          '</div>' .
        '</div>';
      } else {
        echo
        '<div class="alert alert-danger fixed-bottom" role="alert">' .
          '<div class="container">' .
            '<div class="alert-icon">	<i class="now-ui-icons objects_support-17"></i>' .
            '</div>	Email não encontrado!' .
            '<button type="button" class="close" data-dismiss="alert" aria-label="Close">	<span aria-hidden="true">' .
              '<i class="now-ui-icons ui-1_simple-remove"></i>' .
            '</span>' .
            '</button>' .
          '</div>' .
        '</div>';
      }
    }
  }
?>
