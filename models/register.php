<?php

require_once('lib/database.php');

class Register {

    private $form;
    private $formArray;
//return validate(this)
    public function getRegister() {
        $this->form = "
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
<label for='userName'>Nombre de usuario</label>
<input name='userName' id='userName' type='text' />
</div>
<div>
<label for='password'>Clave</label>
<input name='password' id='password' type='password' />
</div>
<div>
<label for='confirmPassword'>Confirmar clave</label>
<input name='confirmPassword' id='confirmPassword' type='password' />
</div>
</fieldset>
<fieldset class='submit'>
<input name='submit' id='submit' value='Inscribirse' type='submit' class='button'/>
</fieldset>
</form>";
        return $this->form;
    }

    public function setData() {
        $this->formArray = $_POST;
        $this->formArray = $this->filterParameters($this->formArray);
        $this->formArray['password'] = sha1($this->formArray['password']);
    }

    public function filterParameters($array) {

        // Check if the parameter is an array
        if (is_array($array)) {
            // Loop through the initial dimension
            foreach ($array as $key => $value) {
                // Check if any nodes are arrays themselves
                if (is_array($array[$key]))
                // If they are, let the function call itself over that particular node
                    $array[$key] = $this->filterParameters($array[$key]);

                // Check if the nodes are strings
                if (is_string($array[$key])) {
                    // If they are, perform the real escape function over the selected node
                    $array[$key] = mysql_real_escape_string($array[$key]);
                    $array[$key] = trim($array[$key]);
                }
            }
        }
        // Check if the parameter is a string
        if (is_string($array))
        // If it is, perform a  mysql_real_escape_string on the parameter
            $array = mysql_real_escape_string($array);

        // Return the filtered result
        return $array;
    }

    public function insertData() {
        try {
            $dbh = new Database();
            $data = array(
                ':name1' => $this->formArray['name1'],
                ':surname1' =>$this->formArray['surname1'],
                ':phone1' => $this->formArray['phone1'],
                ':email1' => $this->formArray['email1'],
                ':name2' => $this->formArray['name2'],
                ':surname2' => $this->formArray['surname2'],
                ':phone2' => $this->formArray['phone2'],
                ':email2' => $this->formArray['email2'],
                ':userName' => $this->formArray['userName'],
                ':password' => $this->formArray['password']
            );

            $sql = "insert into team (name1, surname1, phone1, email1, name2,
                surname2, phone2, email2, userName, password) 
                VALUES (:name1, :surname1, :phone1, :email1, :name2, :surname2, 
                :phone2, :email2, :userName, :password)";
            $sth = $dbh->prepare($sql);
            $sth->execute($data);
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
        header('Location: thankyou.php');
    }

}

