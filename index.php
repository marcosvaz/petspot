<!DOCTYPE html>
<html lang="pt-br">
  <head>
  <meta charset="utf-8" />
  <link rel="icon" type="icon" href="img/favicon.ico">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <title>Mascot Match</title>
  <meta http-equiv='content-language' content='pt-br'>
  <meta name='author' content='Marcos Vaz' />
  <meta name='copyright' content='© 2018 Mascot Match' />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name='rating' content='general' />
  <meta name='robots' content='noimageindex' />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/now-ui-kit.css">
  <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

    <!-- MENU -->
    <nav class="navbar navbar-expand-lg bg-theme fixed-top navbar-transparent" color-on-scroll="300">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="index.php"> Mascot Match </a>
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
    <div class="page-header header-filter">
      <div class="page-header-image" style="background-image: url('img/company.jpg');"></div>
      <div class="content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 ml-auto mr-auto">
              <h1 class="title">Mascot Match</h1>
              <h4 class="description">
                Não compre. Dê um match, é de graça.
              </h4>
              <br>
              <div class="buttons">
                <a href="registrar.php" class="btn btn-theme btn-lg mr-3">Registre-se agora!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /HEADER -->

    <!-- ABOUT -->
    <div class="features-1" id="como-funciona">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-8 ml-auto mr-auto">
    				<h2 class="title">Como funciona a plataforma</h2>
    				<h4 class="description"> O Mascot Match é uma plataforma de adoção de animais no modelo Tinder. Com o Mascot Match você escolhe dentre diversos animais disponibilizados por ONG's, assim você ganha um novo companheiro e a ONG ajuda mais animaiszinhos.</h4>
    			</div>
    		</div>
        <div class="row">
    			<div class="col-md-4 ml-auto mr-auto">
    				<div class="info info-hover">
    					<div class="icon icon-info"> <i class="fa fa-paw"></i>
    					</div>
    					<h4 class="info-title">Você ganha um amigo, e o seu amigo ganha uma nova vida!</h4>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- /ABOUT -->

    <!-- PARCERIA -->
    <div class="page-header header-filter" style="background-color: rgba(0,0,0,0.3);">
      <div class="page-header-image" style="background-image: url('img/cats-company.jpg');"></div>
      <div class="content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-8 ml-auto mr-auto">
              <h1 class="title">Se torne um parceiro</h1>
              <h4 class="description">
                As ONG's cadastradas ganham pontos
              </h4>
              <br>
              <div class="buttons">
                <a href="registrar.php" class="btn btn-theme btn-lg mr-3">Se inscreva agora!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /PARCERIA -->

    <?php include "inc/footer.html"; ?>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="core/bootstrap.min.js"></script>
    <script src="core/now-ui-kit.js"></script>
  </body>
</html>
