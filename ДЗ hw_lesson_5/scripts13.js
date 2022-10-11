function validate(form_id,email) {
	var reg = /^[a-z]{1}[a-z0-9]+\.[a-z0-9]+@[a-z]+[\.\-][a-z0-9]{2,11}$/i;
	var email = document.forms[form_id].elements[email].value;
	if(reg.test(email) == false) {
		alert('Введите корректный e-mail');
		return false;
	} else {
		lert('Ваш e-mail корректный');
		return true;
	}
}