function SendContactEmail()
{

	var name = $("#name").val();
	var email = $("#email").val();
	var message = $("#message").val();

	var grecaptcharesponse = grecaptcha.getResponse();

	//var human = $("#human").val();

	//if ($.trim(name)=='' || $.trim(email)=='' || $.trim(message)=='' || $.trim(human)=='') {
	if ($.trim(name)=='' || $.trim(email)=='' || $.trim(message)=='') {
		$("#contactResponseTitle").html(contactEmptyLabel);
		$("#contactResponse").html(contactEmptyContent);
	} else {
		var ajaxFunction=$.ajax({
			url:"./php/nexo.php",
			type:"post",
			data:{
				doWhat:'SendContactEmail',
				name:name,
				email:email,
				message:message,
				grecaptcharesponse:grecaptcharesponse
				//human:human
			}
		});
		ajaxFunction.done(function(response) {
			switch(response) {
			    case 'ok':
			        $("#contactResponseTitle").html(sentMsgTitle);
					$("#contactResponse").html(sentMsgContent);	// Your message has been sent!

					$("#name").val('');
					$("#email").val('');
					$("#message").val('');
					grecaptcha.reset();
			        break;
			    case 'humanFail':
			        $("#contactResponseTitle").html(humanErrorLabel);
					$("#contactResponse").html(humanErrorMsg);	// Robot verification failed, please try again.
					grecaptcha.reset();
			        break;
			    case 'humanEmpty':
			        $("#contactResponseTitle").html(humanEmptyLabel);
					$("#contactResponse").html(humanEmptyMsg);	// Something went wrong, go back and try again!
			        break;
			    case 'error':
			        $("#contactResponseTitle").html(notSentMsgTitle);
					$("#contactResponse").html(notSentMsgContent);	// Something went wrong, go back and try again!
					grecaptcha.reset();
			        break;
			    default:
			        
			}

			
		});
		ajaxFunction.fail(function(response) {
			$("#contactResponseTitle").html('Error');
			$("#contactResponse").html(response.responseText);
		});
		ajaxFunction.always(function(response) {
			//alert("siempre "+response.statusText);

		});
	}
}


/*function Show(showWhat)
{
	$("#principal").html('<img style="padding-top:10%;" src="imagenes/preloader.gif">');

	var ajaxFunction=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{doWhat:showWhat}
	});
	ajaxFunction.done(function(retorno){
		$("#principal").html(retorno);
	});
	ajaxFunction.fail(function(retorno){
		$("#principal").html(retorno.responseText);	
	});
	ajaxFunction.always(function(retorno){
		//alert("siempre "+retorno.statusText);

	});
}

function MostrarLogin() {
	var funcionAjax=$.ajax({
		url:"nexo.php",
		type:"post",
		data:{doWhat:"MostrarLogin"}
	});
	funcionAjax.done(function(retorno) {
		$("#formLogin").html(retorno);
	});
	funcionAjax.fail(function(retorno) {
		$("#mensajesLogin").html("Error en login.");
	});
	funcionAjax.always(function(retorno) {
		//alert("siempre "+retorno.statusText);
	});
}

function MostrarJSON(tablas) {
	//return tablas;
	tablas = JSON.parse(tablas);
	var retorno;

switch (tablas.status) {
	case 'success':
		retorno = '<div style="padding:10px;">';
		retorno += '<div style="float:left;">';

		// TODO: Cambiar títulos de la tabla
		retorno += "<table><tr><th>Nombre</th><th>Precio</th><th>Tipo</th><th>Acciones</th></tr>";

		for (var i = 0; i <= tablas.data.length - 1; i++) {
			retorno +=  "<tr><td>" + tablas.data[i].campo1 + "</td>";
			retorno +=  "<td>" + tablas.data[i].campo2 + "</td>";
			retorno +=  "<td>" + tablas.data[i].campo3 + "</td>";
			retorno +=  '<td><button class="btn btn-danger" style="margin-right:5px;"" name="Borrar" onclick="Borrar(\''+tablas.data[i].id+'\')">Borrar</button>';
			retorno +=  '<button class="btn btn-warning" name="Modificar" onclick="Modificar(\''+tablas.data[i].id+'\')">Modificar</button></td>';
			retorno +=  '</tr>';
		}
		retorno += '</table></div>';
		break;
	case 'fail':
		retorno = '<h2>' + tablas.data + ':</h2><pre>' + tablas.message + '</pre>';
		break;

	case 'error':
		retorno = '<h2>ERROR EN EL CLIENTE:</h2><pre>' + tablas.message + '</pre>';
		break;
	default:
		retorno = '';
	}

	return retorno;
}*/