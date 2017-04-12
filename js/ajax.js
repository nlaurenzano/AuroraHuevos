function SendContactEmail()
{
	var valid = true;
	var name = $("#name").val();
	var email = $("#email").val();
	var negros12 = $("#negros12").val();
	var negros10 = $("#negros10").val();
	var blancos12 = $("#blancos12").val();
	var blancos10 = $("#blancos10").val();
	var message = $("#message").val();

	if ($.trim(name)=='' || $.trim(email)=='') {
		$("#contactResponseTitle").html("¡Atención!");
		$("#contactResponse").html("Por favor completá los datos de contacto.");
		return false;
	}

	if ($.trim(negros12)=='' && $.trim(negros10)=='' &&$.trim(blancos12)=='' && $.trim(blancos10)=='') {
		$("#contactResponseTitle").html("¡Atención!");
		$("#contactResponse").html("Por favor indicá las cantidades de tu pedido.");
		return false;
	}

	if ( !(validarCantidad(negros12) && validarCantidad(negros10) &&validarCantidad(blancos12) && validarCantidad(blancos10)) ) {
		$("#contactResponseTitle").html("¡Atención!");
		$("#contactResponse").html("Solo se pueden ingresar números enteros en las cantidades.");
		return false;
	}
	
	var ajaxFunction=$.ajax({
		url:"./php/nexo.php",
		type:"post",
		data:{
			doWhat:'SendContactEmail',
			name:name,
			email:email,
			negros12:negros12,
			negros10:negros10,
			blancos12:blancos12,
			blancos10:blancos10,
			message:message,
		}
	});
	ajaxFunction.done(function(response) {
		switch(response) {
		    case 'ok':
		        $("#contactResponseTitle").html("¡Gracias!");
				$("#contactResponse").html("Tu pedido ya fué enviado.");	// Your message has been sent!

				$("#name").val('');
				$("#email").val('');
				$("#negros12").val('');
				$("#negros10").val('');
				$("#blancos12").val('');
				$("#blancos10").val('');
				$("#message").val('');
		        break;
		    case 'error':
		        $("#contactResponseTitle").html("Error");
				$("#contactResponse").html("Algo ha salido mal. Volvé a intentarlo.");	// Something went wrong, go back and try again!
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

function validarCantidad(valor) {
	if (valor != '') {
		valor = Number(valor);
		if (Number.isInteger(valor)) {
			if (valor < 0) {
				return false;
			}
		} else {
			return false;
		}
	}
	return true;
}