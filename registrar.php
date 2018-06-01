<?php
  include "includes/functions.php";
  include "includes/validasessao.php";
  if(valida()){
    header('Location: inicial.php');
  }
  registrar();

  include "inc/header.php";
?>

    <?php include "inc/menu.php"; ?>

    <!-- HEADER -->
    <div class="page-header header-filter section-image">
      <div class="page-header-image" style="background-image: url('img/cat-sleep.jpg');"></div>
      <div class="content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 ml-auto mr-auto">
              <h1 class="title">Registre-se aqui</h1>
              <h4 class="description">
                <div class="col-sm-8 ml-auto mr-auto form-group">
                  <form action="registrar.php" method="post">
                  <br>
                  <input class="form-control" type="text" name="nome" placeholder="Nome completo" style="background: transparent;" required>
                  <br>
                	<input class="form-control date" type="text" name="data" placeholder="Data de Nascimento" style="background: transparent;" required>
                  <br>
                  <input class="form-control" type="email" name="email" placeholder="Email" style="background: transparent;" required>
                  <br>
                  <input class="form-control" type="password" name="senha" placeholder="Senha" style="background: transparent;" required>
                </div>
              </h4>
              <br>
              <div class="buttons">
                <input type="submit" class="btn btn-theme btn-lg" name="registrar" value="Registrar">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /HEADER -->

<?php include "inc/js.html"; ?>
