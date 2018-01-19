function validarCambioPassword(){

	expresion = /^[a-zA-Z0-9]*$/;
	currentPass = $('#old-pass');
	newPass = $('#new-pass-1');
	newPass2 = $('#new-pass-2');

	if(!expresion.test(currentPass.val())){
		$('.alerta').remove();
		$('#btnCambiarPass').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">La contraseña actual es incorrecta.</div>');
		currentPass.val('');
		currentPass.focus();
		return false;
	} else {

		if(!expresion.test(newPass.val())){
		
			$('.alerta').remove();
			$('#btnCambiarPass').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">La nueva contraseña no puede contener caracteres especiales. Sólo se adminiten minúsculas, mayúsculas y números.</div>');

			newPass.val('');
			newPass2.val('');
			newPass.focus();
			return false;
		}
	}

	if(newPass.val() != newPass2.val()){
		
		$('.alerta').remove();
		$('#btnCambiarPass').after('<div class="col-12 alert alert-danger alerta" style="margin-top: 15px; margin-bottom: 15px">Las contraseñas no coinciden.</div>');

		newPass.val('');
		newPass2.val('');
		newPass.focus();
		return false;
	}

	return true;
}