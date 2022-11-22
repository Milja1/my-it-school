<?php require_once "./header.php";

	function testNumberPhone($name, $phone, $email, $message)
	{
		if ((preg_match('/^[A-zА-я]{2,10}$/i', $name))
			&& preg_match('/^[+][\d]{3}[( -][\d]{2}[- )][\d]{3}-[\d]{2}-[\d]{2}$/', $phone)
			&& (preg_match('/^[a-z]([a-z0-9])+@[a-z]+[\-\.]?[a-z]+\.([a-z]{2,11})$/i', $email))
			&& (preg_match('/^[\s\S]{2,250}$/i', strip_tags($message)))
		) {
?>			
			<div>
    			<h1>Ваше сообщение было отправлено успешно!<br>Вы будете автоматически перенаправлены на главную страницу.</h1>
			</div>
<?php 
			header('Refresh: 5; url="./home.php"');
		} else { 
?>
			<div>
				<h1>Вы ввели информацию в неверном формате.<br>Попробуйте заполнить форму еще раз.</h1>
			</div>
<?php
			header('Refresh: 5; url="./contact.php"');
		}
	}
	testNumberPhone($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['message']);	
?>