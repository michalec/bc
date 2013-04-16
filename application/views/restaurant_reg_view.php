<div id="auth">
	
	<h1>Registrácia reštaurácie</h1>
	
	<?php 
		echo form_open('restaurant/register');
                    echo '<h3>Základné informácie</h3>';
                    
                    echo form_input('name', set_value('name', 'Názov reštaurácie')),'<br />';
                    echo form_input('email', set_value('email', 'Emailová adresa')),'<br />';
                    
                    echo '<h3>Heslo</h3>';
                    echo form_password('password'),'<br />';
                    echo form_password('password2'),'<br />';
                    
                    echo '<h3>Rozšitujúce informácie</h3>';
                    echo form_input('phone', set_value('phone', 'Telefónne číslo')),'<br />';
                    echo form_input('adress', set_value('adress', 'Adresa')),'<br />';
                    echo form_input('postcode', set_value('postcode', 'PSČ')),'<br />';
                    
                    echo '<h3>Popis reštaurácie</h3>';
                    echo form_textarea('text', '');
                    
                    echo form_submit('submit', 'Zaregistruj sa');
		echo form_close();
	?>
	
	<div class="errors">
		<?= validation_errors() ?>
	</div>
	
</div>
	
