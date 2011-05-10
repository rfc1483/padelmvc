<div><?php echo $login->getErrorString(); ?></div>
<form name='form' id='form' class='form' action='login.php' onsubmit='return validateLogin(this)' method='post'>
    <fieldset>
        <legend>
            <span>Login</span>
        </legend>
        <input type='hidden' name='page_mode' value='login' />
        <div>
            <label for='userName'>Usuario</label>
            <input name='userName' id='userName' value='<?php echo $login->getUserName(); ?>' type='text' />
        </div>
        <div>
            <label for='clave'>Clave</label>
            <input name='password' id='password' type='password' />
        </div>   
    </fieldset>
    <fieldset class='submit'>
        <input name='submit' id='submit' value='Entrar' type='submit' class='button' />
    </fieldset>
</form>
<a href='index.php'>Volver</a>