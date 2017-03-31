<?php

 $lang = array(
 	"Spanish"=>
 		array(
 			"relatibas"=>"ReLatIBaS",
 			"relatibasDesc"=>"Red Latinoamericana de Investigación Básica de Sueño",
 			"underConstruction"=>"Este sitio se encuentra en construcción",

 			// Sections
 			"information"=>"Información",
 			"contact"=>"Contacto",
 			"register"=>"Registrarse",
 			"infoContent"=>"Descripción de la red. Todavía está pendiente este texto.",
 			"contactUs"=>"Contáctenos",
 			"contactUsContent"=>"Envíenos un correo electrónico y nos pondremos en contacto con usted.",
 			"nameLabel"=>"Nombre",
 			"emailLabel"=>"Correo electrónico",
 			"messageLabel"=>"Mensaje",
 			"humanLabel"=>"¿Cuánto es 2 + 2?",
 			"sendButtonLabel"=>"Enviar",
 			"registerTitle"=>"Registración",
 			"registerContent"=>"Ingrese sus datos para registrarse como miembro de la red y acceder al sitio completo.",
 			"contactEmptyLabel"=>"¡Atención!",
 			"contactEmptyContent"=>"Por favor complete todos los campos.",
 			"humanErrorLabel"=>"Error",
 			"humanErrorMsg"=>"La verificación antispam ha fallado, por favor vuelva a intentarlo.",
 			"humanEmptyLabel"=>"Error",
 			"humanEmptyMsg"=>"Por favor complete el campo reCAPTCHA.",
 			"sentMsgTitle"=>"¡Gracias!",
			"sentMsgContent"=>"¡Su mensaje ha sido enviado!",
 			"notSentMsgTitle"=>"Error",
			"notSentMsgContent"=>"Algo ha salido mal. Vuelva a intentarlo."

 		),

 	"English"=>
 		array(
 			"relatibas"=>"ReLatIBaS",
 			"relatibasDesc"=>"Red Latinoamericana de Investigación Básica de Sueño",
 			"underConstruction"=>"This site is still under construction",

 			// Sections
 			"information"=>"Information",
 			"contact"=>"Contact",
 			"register"=>"Registration",
 			"infoContent"=>"Hero goes the network description. Content is coming soon.",
 			"contactUs"=>"Contact us",
 			"contactUsContent"=>"Send us an e-mail and we will contact you.",
 			"nameLabel"=>"Name",
 			"emailLabel"=>"E-Mail",
 			"messageLabel"=>"Message",
 			"humanLabel"=>"What is 2 + 2?",
 			"sendButtonLabel"=>"Send",
 			"registerTitle"=>"Registration",
 			"registerContent"=>"Fill the form to register as a member of the network and get access to the full site.",
 			"contactEmptyLabel"=>"Attention!",
 			"contactEmptyContent"=>"All contact fields are required.",
 			"humanErrorLabel"=>"Error",
 			"humanErrorMsg"=>"Robot verification failed, please try again.",
 			"humanEmptyLabel"=>"Error",
 			"humanEmptyMsg"=>"Please click on the reCAPTCHA box.",
 			"sentMsgTitle"=>"Thank you!",
			"sentMsgContent"=>"Your message has been sent!",
			"notSentMsgTitle"=>"Error",
			"notSentMsgContent"=>"Something went wrong, go back and try again!"
 			

 		)
 	);


function get_Text($textKey) {
	$language = 'Spanish';
	global $lang;
	return $lang[$language][$textKey];
}

?>

<script>
    var contactEmptyLabel = '<?=get_Text('contactEmptyLabel')?>';
    var contactEmptyContent = '<?=get_Text('contactEmptyContent')?>';
    var sentMsgTitle = '<?=get_Text('sentMsgTitle')?>';
    var sentMsgContent = '<?=get_Text('sentMsgContent')?>';
    var notSentMsgTitle = '<?=get_Text('notSentMsgTitle')?>';
    var notSentMsgContent = '<?=get_Text('notSentMsgContent')?>';
    var humanErrorLabel = '<?=get_Text('humanErrorLabel')?>';
    var humanErrorMsg = '<?=get_Text('humanErrorMsg')?>';
    var humanEmptyLabel = '<?=get_Text('humanEmptyLabel')?>';
    var humanEmptyMsg = '<?=get_Text('humanEmptyMsg')?>';

    
</script>

