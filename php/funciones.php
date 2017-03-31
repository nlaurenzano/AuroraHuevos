<?php 
require_once('recaptchalib.php');

function SendContactEmail() {

    //$human = $_POST['human'];

    if(isset($_POST['grecaptcharesponse']) && !empty($_POST['grecaptcharesponse'])) {
        // your site secret key
        $secret = getSiteSecretKey();
        
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['grecaptcharesponse']);

        $responseData = json_decode($verifyResponse);

        if($responseData->success) {
            //$body = "From: $name\n E-Mail: $email\n Message:\n $message";
            $name = !empty($_POST['name'])?$_POST['name']:'';
            $email = !empty($_POST['email'])?$_POST['email']:'';
            $message = !empty($_POST['message'])?$_POST['message']:'';
            $from = 'From: ReLatIBaS';
            
            $to = 'power500@gmail.com'; 
            $subject = 'Contact';

            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>".$name."</p>
                <p><b>Email: </b>".$email."</p>
                <p><b>Message: </b>".$message."</p>
            ";

            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:'.$name.' <'.$email.'>' . "\r\n";

            //mail($para, $titulo, $mensaje, $cabeceras);
            //if (mail ($to, $subject, $headers, $from)) { 
            if (mail ($to, $subject, $htmlContent, $headers)) { 
                echo 'ok';  // Your message has been sent!
            } else { 
                echo 'error';   // Something went wrong, go back and try again!
            }
        } else {
             echo 'humanFail'; // Robot verification failed, please try again.
        }
    } else {
         echo 'humanEmpty';  // Please click on the reCAPTCHA box.
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

// reCAPTCHA Site secret key
function getSiteSecretKey() {
    if (isLocalServer()) {
        return '6LfTDhMUAAAAAGHBcDEMhBlzZo44T8dE2DZE97zA';  // local key
    } else {
        return '6LfTGBMUAAAAAEbGluBBA-mJdHPIPCcu1OS6dAyk';  // public key
    }
}


?>