<?php
  include "includes/erros.php";
  if(isset($_POST['subscribe'])){
    $email = strtolower($_POST['email']);
    if(!strstr($email, '@') || !strstr($email, '.com')){
      echo danger("Email inválido!");
    } else {
      // usar função mail para enviar um email
      $headers = "MIME-Version: 1.1\r\n";
      $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
      $headers .= "From: contato@mascotmatch.com.br \r\n"; // remetente
      $headers .= "Return-Path: contato@mascotmatch.com.br \r\n"; // return-path
      $envio = mail("marcosvazdeveloper@gmail.com", "Inscrição", "Nova Inscrição de: $email", $headers);

      if($envio){
        // Escrita de CSV
        $file = fopen("subscribes/subscribes.csv", "a+");
        fwrite($file, $email . ";");
        fclose($file);
        echo success("Inscrito com sucesso!");
      } else {
        echo danger("Houve algum erro! Tente novamente mais tarde.");
      }
    }
  }

  include "inc/header.php";
?>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg bg-theme fixed-top navbar-transparent" color-on-scroll="300">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="index.php"> <img src="img/petstop-white.png" width="116px" /> </a>
        </div>
      </div>
    </nav>
    <!-- /MENU -->

    <!-- HEADER -->
    <div class="page-header header-filter" style="background: rgba(0, 0, 0, 0.3);">
      <div class="page-header-image" style="background-image: url('img/dog-sad.jpg');"></div>
      <div class="content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 ml-auto mr-auto">
              <h1 class="title">Pet Stop</h1>
              <h4 class="description">
                A nossa plataforma ainda está em desenvolvimento, se você desejar saber quando estiver pronta, digite seu email abaixo e nós te avisaremos!
              </h4>
              <br>
              <div class="buttons">
                <form action="" method="post">
                  <div class="col-md-10 ml-auto mr-auto">
                    <input type="email" class="form-control" name="email" placeholder="Digite seu email..." style="background: transparent;" required>
                  </div>
                  <input type="submit" class="btn btn-theme btn-md mr-3" name="subscribe" value="Enviar!">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /HEADER -->

<?php include "inc/js.html"; ?>
