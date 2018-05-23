<?php
  include "includes/validasessao.php";
  if(!valida()){
    header('Location: index.php');
  }
  include "includes/functions.php";
?>
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
    <nav class="navbar navbar-expand-lg bg-theme fixed-top">
      <div class="container">
        <div class="navbar-translate">
          <a class="navbar-brand" href="inicial.php"> Mascot Match </a>
          <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
  					<span class="navbar-toggler-bar bar1"></span>
  					<span class="navbar-toggler-bar bar2"></span>
  					<span class="navbar-toggler-bar bar3"></span>
  				</button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" data-nav-image="#">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="dados" href="">
              	<img class="media-object img-raised" alt="24x24" style="width: 24px; background-color: transparent;" src="<?php echo exibirFoto(); ?>"> <?php echo exibirNome(); ?>
              </a>
              <ul class="dropdown-menu" aria-labelledby="dados">
                <a class="dropdown-item" href="#plataforma/matches.php">Meus Matches</a>
                <a class="dropdown-item" href="#plataforma/conversas.php">Conversas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#plataforma/meus-dados.php">Meus Dados</a>
              </ul>
            </li>
            <li class="nav-item"> <a class="nav-link" href="includes/logout.php">LOGOUT</a> </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- /MENU -->

    <!-- CHOOSE -->
    <div class="features-1" style="padding-bottom: 0;">
    	<div class="container">
        <div class="row">
          <!-- FILTRO -->
          <!--
            TODO: Filtro por idade, sexo, raça - mais próximo
          -->
		      <div class="col-md-2" data-background-color="black">
				    <h3 class="title">Filtro</h3>
            <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
            	<div class="card card-plain">
                <!-- IDADE -->
                <!-- TODO: aria-expanded="true" & id="collapseX" class="show" -->
            		<div class="card-header" role="tab" id="headingOne"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Idade<i class="now-ui-icons arrows-1_minimal-down"></i></a>
            		</div>
            		<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne">
            			<div class="card-body"></div>
            		</div>
                <!-- /IDADE -->

                <!-- SEXO -->
                <div class="card-header" role="tab" id="headingTwo"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo" class="collapsed">Sexo<i class="now-ui-icons arrows-1_minimal-down"></i></a>
            		</div>
            		<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
            			<div class="card-body"></div>
            		</div>
                <!-- /SEXO -->
            	</div>
          	</div>
          </div>
          <!-- /FILTRO -->

          <!-- MATCH -->
          <div class="col-md-10" style="padding-top: 25px;">
            <!-- CARD -->
            <div class="col-md-8 col-lg-6 ml-auto mr-auto">
            	<div class="card card-blog">
            		<div class="card-image">
            			<a href="#pablo">
            				<img class="img rounded" src="img/dog-happy.jpg">
            			</a>
            		</div>
            		<div class="card-body">
            			<h5 class="card-title">
										Brad Pitt
									</h5>
            			<div class="card-description">
                    <div class="col">Idade:</div>
                  </div>
            			<div class="card-footer">
            				<div class="author">
            					<img src="img/user.png" alt="..." class="avatar img-raised">	<span>Usuário</span>
            				</div>
            				<div class="stats stats-right">	<i class="now-ui-icons tech_watch-time"></i> 5 min read</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- /CARD -->
          </div>
          <!-- /MATCH -->
        </div>
    	</div>
    </div>
    <!-- /CHOOSE -->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="core/bootstrap.min.js"></script>
    <script src="core/now-ui-kit.js"></script>
  </body>
</html>
