function validarPromoTV ()
{
	var error_dni = document.getElementById('error_dni');
	var error_email = document.getElementById('error_email');
	var campo_dni = document.getElementById('00No000000Cm63X');
	var campo_email = document.getElementById('email');
	var dni_ok = (campo_dni.value != '');
	var email_ok = (campo_email.value != '');
	error_dni.style.display = (dni_ok ? 'none' : 'block');
	error_email.style.display = (email_ok ? 'none' : 'block');
	return dni_ok && email_ok;
}