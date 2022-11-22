<?php
require_once './header.php';

require_once './nav.php';
?>
<h1>Contacts page</h1>
<div class="form">
	<form enctype="multipart/form-data" action="./form.php" method="POST">   
			
		<fieldset>
			<legend>Информация о пользователе</legend>
			<div class="form_field">
				<input type="text" name="name" placeholder="Name" />
			</div>
			<div class="form_field">
				<input type="phone" name="phone" placeholder="Phone" /> 
			</div>
			<div class="form_field">
				<input type="email" name="email" placeholder="Email" /> 
			</div>				
		</fieldset>

		<div class="form_field">
			<textarea name="message" placeholder="Введите текст не более 100 символов"></textarea>
		</div>

		<div class="form_field">
			<input type="checkbox" name="confirm" /> Я подтверждаю указанные мною данные
		</div>

		<button>Отправить</button>

	</form>
</div>
<?php
require_once './footer.php';
