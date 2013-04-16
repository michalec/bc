<div id="auth">

            <h1>Login</h1>

            <?php 
                    echo form_open('auth/login');
                    echo form_input('email', set_value('email', 'Emailová adresa'));
                    echo form_password('password');
                    echo form_submit('submit', 'Prihlás sa');
                    echo form_close();
            ?>

        </div>
