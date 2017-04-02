<?php 

function SendContactEmail() {
    //$body = "From: $name\n E-Mail: $email\n Message:\n $message";
    $name = !empty($_POST['name'])?$_POST['name']:'';
    $email = !empty($_POST['email'])?$_POST['email']:'';
    $negros12 = !empty($_POST['negros12'])?$_POST['negros12']:'';
    $negros10 = !empty($_POST['negros10'])?$_POST['negros10']:'';
    $blancos12 = !empty($_POST['blancos12'])?$_POST['blancos12']:'';
    $blancos10 = !empty($_POST['blancos10'])?$_POST['blancos10']:'';
    $message = !empty($_POST['message'])?$_POST['message']:'';
    $from = 'From: Aurora Huevos';
    
    $to = 'power500@gmail.com'; 
    $subject = 'Pedido de huevos';

    $htmlContent = "
        <h1>Nuevo pedido de huevos</h1>
        <br />
        <p><b>Nombre: </b>".$name."</p>
        <p><b>Info de contacto: </b>".$email."</p>
        <p><b>Cantidad de huevos NEGROS nro. 12: </b>".$negros12."</p>
        <p><b>Cantidad de huevos NEGROS nro. 10: </b>".$negros10."</p>
        <br />
        <p><b>Cantidad de huevos BLANCOS nro. 12: </b>".$blancos12."</p>
        <p><b>Cantidad de huevos BLANCOS nro. 10: </b>".$blancos10."</p>
        <br />
        <p><b>Mensaje: </b>".$message."</p>
    ";

    // Always set content-type when sending HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From:'.$name. "\r\n";

    //mail($para, $titulo, $mensaje, $cabeceras);
    //if (mail ($to, $subject, $headers, $from)) { 
    if (mail ($to, $subject, $htmlContent, $headers)) { 
        echo 'ok';  // Your message has been sent!
    } else { 
        echo 'error';   // Something went wrong, go back and try again!
    }

}

// returns true if $needle is a substring of $haystack
function strContains($needle, $haystack)
{
    return strpos($haystack, $needle) !== false;
}

// Checks the server the site is running on. Returns true if it is localhost
function isLocalServer() {
    return strContains('localhost',$_SERVER['HTTP_HOST']);   
}

// reCAPTCHA Data site key
function getDataSitekey() {
    if (isLocalServer()) {
        return '6LfTDhMUAAAAAPK-0Qwjlehd9tTR4ssWb0dUWSFv';  // local key
    } else {
        return '6LfTGBMUAAAAAIHhb_jQ06BxdTL72zLNFSrZtira';  // public key
    }
}

?>