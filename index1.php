<?php include "inc/header.php"; ?>

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
            <li class="nav-item"> <a class="nav-link" href="loja.php">LOJA</a> </li>
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
                As ONG's cadastradas dispõe de benefícios através da nossa plataforma. Junte-se a nós e descubra quais são os benefícios!
              </h4>
              <br>
              <div class="buttons">
                <a href="parceria.php" class="btn btn-theme btn-lg mr-3">Descubra!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /PARCERIA -->

    <?php include "inc/footer.php"; ?>

<?php include "inc/js.html"; ?>
