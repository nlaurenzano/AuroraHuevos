<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <?php require_once('./php/funciones.php') ?>
    
    <title>En estas Pascuas regalá huevos artesanales</title>
    <meta name="description" content="En estas Pascuas regalá huevos artesanales" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    
    <!--
    <link rel="icon" href="relatibas.ico">
    -->

    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />

    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>

  <body>
    <nav id="topNav" class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand page-scroll" href="#first"><img src="../assets/Logo_Aurora.png"></a>
            </div>
        </div>
    </nav>

    <header id="first">
        <div class="header-content">
            <div class="inner">
                <h1 class="cursive">En estas Pascuas regalá huevos artesanales</h1>
                <h4>A beneficio del Jardín de la Aurora.</h4>
                <h4>Pedagogía Waldorf. Ribera de Quilmes.</h4>
                <br />
                <hr>
                <br />
                <h3>Pedidos por WhatsApp al 11.6766.0324</h4>
                <br />
                <hr>
                <br />

            </div>
        </div>
    </header>

    <section class="bg-primary" id="contacto">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="margin-top-0 wow fadeIn">Contactanos</h2>
                    <hr class="primary">
                    <p><?=get_Text('contactUsContent')?></p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form row">
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
                        </div>
                        <div class="col-md-6">
                            <label></label>
                            <input type="text" class="form-control" placeholder="Email" name="email" id="email">
                        </div>
                        <div class="col-md-12">
                            <label></label>
                            <textarea class="form-control" rows="5" placeholder="Mensaje" name="message" id="message"></textarea>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <div class="g-recaptcha" data-sitekey="<?=getDataSitekey()?>"></div>
                        </div>
                        <div class="col-md-4 col-md-offset-4">
                            <label></label>
                            <button type="button" onclick="SendContactEmail()" data-toggle="modal" data-target="#alertModal" class="btn btn-primary btn-block btn-lg">Enviar <i class="ion-android-arrow-forward"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-6 col-sm-3 column">
                    <h4>Information</h4>
                    <ul class="list-unstyled">
                        <li><a href="">Products</a></li>
                        <li><a href="">Services</a></li>
                        <li><a href="">Benefits</a></li>
                        <li><a href="">Developers</a></li>
                    </ul>
                </div>
                <div class="col-xs-6 col-sm-3 column">
                    <h4>About</h4>
                    <ul class="list-unstyled">
                        <li><a href="#">Contact Us</a></li>
                        <li><a href="#">Delivery Information</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-3 column">
                    <h4>Stay Posted</h4>
                    <form>
                        <div class="form-group">
                          <input type="text" class="form-control" title="No spam, we promise!" placeholder="Tell us your email">
                        </div>
                        <div class="form-group">
                          <button class="btn btn-primary" data-toggle="modal" data-target="#alertModal" type="button">Subscribe for updates</button>
                        </div>
                    </form>
                </div>
                <div class="col-xs-12 col-sm-3 text-right">
                    <h4>Follow</h4>
                    <ul class="list-inline">
                      <li><a rel="nofollow" href="" title="Twitter"><i class="icon-lg ion-social-twitter-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Facebook"><i class="icon-lg ion-social-facebook-outline"></i></a>&nbsp;</li>
                      <li><a rel="nofollow" href="" title="Dribble"><i class="icon-lg ion-social-dribbble-outline"></i></a></li>
                    </ul>
                </div>
            </div>
            <br/>
            <span class="pull-right text-muted small"><a href="http://www.bootstrapzero.com">Landing Zero by BootstrapZero</a> ©2015 Company</span>
        </div>
    </footer>

    <div id="alertModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm">
        <div class="modal-content">
        	<div class="modal-body">
        		<h2 class="text-center" id="contactResponseTitle">¡Muchas gracias!</h2>
        		<p class="text-center" id="contactResponse"></p>
        		
        		<br/>
        		<button class="btn btn-primary btn-lg center-block" data-dismiss="modal" aria-hidden="true">Cerrar <i class="ion-android-close"></i></button>
        	</div>
        </div>
        </div>
    </div>
    
    <!--scripts loaded here -->
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/jquery.easing.min.js"></script>
    <script src="./js/wow.js"></script>
    <script src="./js/scripts.js"></script>
    <script src="./js/ajax.js"></script>

    <sc
  </body>
</html>