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
      <div class="page-header-image" style="background-image: url('img/dogs-playing.jpg');"></div>
      <div class="content-center">
        <div class="container">
          <div class="row">
            <div class="col-md-7 ml-auto mr-auto">
              <h1 class="title">MascotHelper</h1>
              <h4 class="description">
                Nossos animais ganham uma vida melhor, e você também ganha com isso!
              </h4>
              <br>
              <div class="buttons">
                <a href="#como-funciona" class="btn btn-theme btn-lg mr-3">Descubra como isso acontece</a>
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
    				<h2 class="title">Como funciona</h2>
    				<h4 class="description">O <span class="text-danger">MascotHelper</span> é um selo que você ganha, por participar de um de nossos planos, esse selo demonstra que você é um ajudante dos animais e das ONG's, pois com o valor dos planos, nós doamos uma parte para as ONG's para judar a cuidar de outros animais.</h4>
    			</div>
    		</div>
    		<div class="row">
    			<div class="col-md-4 ml-auto mr-auto">
    				<div class="info info-hover">
    					<div class="icon icon-danger"> <i class="fa fa-crown"></i>
    					</div>
    					<h4 class="info-title">Selo MascotHelper</h4>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
    <!-- /ABOUT -->

    <!-- PRICING -->
    <div class="pricing-1 section-image" id="pricing-1" style="background-image: url('img/dog-cat.jpg')">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto text-center">
            <h2 class="title">Os planos abaixo envolvem o selo MascotHelper</h2>
            <div class="section-space"></div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-pricing">
              <div class="card-body">
                <h6 class="category">Básico</h6>
                <div class="icon icon-primary"> <i class="now-ui-icons files_box"></i>
                </div>
                <h3 class="card-title">R$19<small>,90</small></h3>
                <ul>
                  <li>Selo <a class="text-danger" href="mascothelper.php">MascotHelper</a></li>
                </ul> <a href="" class="btn btn-primary btn-round">Escolher</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- /PRICING -->

    <?php include "inc/footer.php"; ?>

<?php include "inc/js.html"; ?>
