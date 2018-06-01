<?php
  include "includes/functions.php";
  include "includes/validasessao.php";
  if(valida()){
    header('Location: inicial.php');
  }
  registrar();

  include "inc/header.php";
?>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg bg-theme fixed-top navbar-transparent" color-on-scroll="300">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="index1.php"> Mascot Match </a>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
    					<span class="navbar-toggler-bar bar1"></span>
    					<span class="navbar-toggler-bar bar2"></span>
    					<span class="navbar-toggler-bar bar3"></span>
    				</button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" data-nav-image="#">
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="faq.php">FAQ</a> </li>
            <li class="nav-item"> <a class="nav-link" href="registrar.php">REGISTRAR</a> </li>
            <li class="nav-item"> <a class="nav-link" href="login.php">LOGIN</a> </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /MENU -->

    <!-- HEADER -->
    <div class="page-header header-filter section-image">
      <div class="page-header-image" style="background-image: url('img/cat-sleep.jpg');"></div>
      <div class="content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 ml-auto mr-auto">
              <h1 class="title">Inscreva-se aqui</h1>
              <h4 class="description">
                <div class="col-sm-8 ml-auto mr-auto form-group">
                  <form action="registrar.php" method="post">
                  <br>
                  <input class="form-control" type="text" name="nome" placeholder="Nome da ONG" style="background: transparent;" required>
                  <br>
                  <input class="form-control" type="number" name="cnpj" placeholder="CNPJ" style="background: transparent;" required>
                  <br>
                  <input class="form-control" type="email" name="email" placeholder="Email de Contato" style="background: transparent;" required>
                </div>
              </h4>
              <br>
              <div class="buttons">
                <input type="submit" class="btn btn-theme btn-lg" name="inscrever" value="Inscrever">
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /HEADER -->

<?php include "inc/js.html"; ?>
