<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <?php require_once('./php/funciones.php') ?>
    
    <title>En estas Pascuas regalá huevos artesanales</title>
    <meta name="description" content="En estas Pascuas regalá huevos artesanales" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="generator" content="Codeply">
    
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.min.css" />
    <link rel="stylesheet" href="./css/ionicons.min.css" />
    <link rel="stylesheet" href="./css/styles.css" />

  </head>

  <body>
    <section class="bg-primary" id="contacto">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h1>En estas Pascuas regalá huevos artesanales</h1>
                    <h4>A beneficio del Jardín de la Aurora.</h4>
                    <h4>Pedagogía Waldorf. Ribera de Quilmes.</h4>
                    <hr class="primary">
                    <br />
                    <h2 class="margin-top-0 wow fadeIn">¡Hacé tu pedido desde acá!</h2>
                    <p>También por WhatsApp al 11.6766.0324</p>
                </div>
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <form class="contact-form">

                        <div class="col-md-6">

                            <div class="col-md-12">
                                <label class="text-left">DATOS DE CONTACTO</label>
                                <input type="text" class="form-control" placeholder="Nombre" name="name" id="name">
                            </div>

                            <div class="col-md-12">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Nro. de teléfono o Email" name="email" id="email">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <label>CHOCOLATE NEGRO</label>
                                <input type="text" class="form-control" placeholder="Nro. 12 (200g.)" name="negros12" id="negros12">
                            </div>

                            <div class="col-md-12">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Nro. 10" name="negros10" id="negros10">
                            </div>
                        </div>
                        
                        <div class="col-md-3">
                            <div class="col-md-12">
                                <label>CHOCOLATE BLANCO</label>
                                <input type="text" class="form-control" placeholder="Nro. 12 (200g.)" name="blancos12" id="blancos12">
                            </div>

                            <div class="col-md-12">
                                <label></label>
                                <input type="text" class="form-control" placeholder="Nro. 10" name="blancos10" id="blancos10">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-12">
                                <label></label>
                                <textarea class="form-control" rows="4" placeholder="Mensaje (opcional)" name="message" id="message"></textarea>
                            </div>
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