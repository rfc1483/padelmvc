<?php

class Register {

    public function getRegister() {

        $form = "
<form name='form' id='form' class='form' action='register.php' onsubmit='return validate(this)' method='post'>
<fieldset>
<legend>
<span>Inscripcion</span>
</legend>
<input type='hidden' name='page_mode' value='register' />
<div>
<label for='name1'>Nombre primer jugador</label>
<input id='name1' name='name1' id='name1' type='text' />
</div>
<div>
<label for='surname1'>Apellido primer jugador</label>
<input name='surname1' id='surname1' type='text' />
</div>
<div>
<label for='telefono1'>Telefono primer jugador</label>
<input name='phone1' id='phone1' type='text' />
</div>
<div>
<label for='email1'>E-mail primer jugador</label>
<input name='email1' id='email1' type='text' />
</div>
<div>
<label for='name2'>Nombre segundo jugador</label>
<input name='name2' id='name2' type='text' />
</div>
<div>
<label for='surname2'>Apellido segundo jugador</label>
<input name='surname2' id='surname2' type='text' />
</div>
<div>
<label for='telefono2'>Telefono segundo jugador</label>
<input name='phone2' id='phone2' type='text' />
</div>
<div>
<label for='email2'>E-mail segundo jugador</label>
<input name='email2' id='email2' type='text' />
</div>
<div>
<label for='user_name'>Nombre de usuario</label>
<input name='user_name' id='user_name' type='text' />
</div>
<div>
<label for='password'>Clave</label>
<input name='password' id='password' type='password' />
</div>
<div>
<label for='conf_password'>Confirmar clave</label>
<input name='conf_password' id='conf_password' type='password' />
</div>
</fieldset>
<fieldset class='submit'>
<input name='submit' id='submit' value='Inscribirse' type='submit' class='button'/>
</fieldset>
</form>";
        return $form;
    }

    public function setData() {
        require_once('lib/database.php');
        $database = new Database();
        $db = $database->connect();
        $name1 = trim($_POST['name1']); // trim to remove whitespace
        $surname1 = trim($_POST['surname1']);
        $phone1 = trim($_POST['phone1']);
        $email1 = trim($_POST['email1']);
        $name2 = trim($_POST['name2']);
        $surname2 = trim($_POST['surname2']);
        $phone2 = trim($_POST['phone2']);
        $email2 = trim($_POST['email2']);
        $userName = trim($_POST['userName']);
        $password = $_POST['password'];
        $conf_password = $_POST['conf_password'];

        $name1 = mysql_real_escape_string($name1);
        $surname1 = mysql_real_escape_string($surname1);
        $phone1 = mysql_real_escape_string($phone1);
        $email1 = mysql_real_escape_string($email1);
        $name2 = mysql_real_escape_string($name2);
        $surname2 = mysql_real_escape_string($surname2);
        $phone2 = mysql_real_escape_string($phone2);
        $email2 = mysql_real_escape_string($email2);
        $userName = mysql_real_escape_string($userName);
//        echo "antes de sha1: $password <br />";
        $password = sha1($password); // hash password
//        echo "despues de sha1: $password";

        /* INSERT data */
        $data = array($name1, $surname1, $phone1, $email1, $name2, $surname2, $phone2, $email2, $userName, $password);
        $stmt = $db->prepare("INSERT INTO team (name1, surname1, phone1, email1, 
            surname2, phone2, email2, userName, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?");
        
        $stmt->execute($data);
        
        /* close the database connection ** */
        $db = null;
//        header('Location: thankyou.php');
    }

}

