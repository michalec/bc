<div id="auth">
	
	<h1>Registrácia klienta</h1>
	
	<?php 
		echo form_open('client/register');
                    echo form_input('name', set_value('name', 'Meno')),'<br />';
                    echo form_input('surname', set_value('surname', 'Priezvisko'), 'style="margin-bottom: 25px;"'),'<br />';
                    echo form_input('email', set_value('email', 'Emailová adresa')),'<br />';
                    echo form_password('password'),'<br />';
                    echo form_password('password2'),'<br />';
                    
                    
                    
                    echo form_submit('submit', 'Zaregistruj sa');
		echo form_close();
	?>
	
	<div class="errors">
		<?= validation_errors() ?>
	</div>
	
</div>
	
