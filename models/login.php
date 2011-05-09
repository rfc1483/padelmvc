<?php

class Login {

    private $errorString;
    private $result;

    function __construct() {
        $this->errorString = '';
        $this->result = '';
    }

    public function getLogin() {
        $login = "
        <div>$this->errorString</div>
        <form name='form' id='form' class='form' action='login.php' onsubmit='return validateLogin(this)' method='post'>
            <fieldset>
                <legend>
                    <span>Login</span>
                </legend>
                <input type='hidden' name='page_mode' value='login' />
                <div>
                    <label for='userName'>Usuario</label>
                    <input name='userName' id='userName' value='$this->userName' type='text' />
        </div>
        <div>
            <label for='clave'>Clave</label>
            <input name='password' id='password' value='$this->password' type='password' />
        </div>   
        </fieldset>
        <fieldset class='submit'>
        <input name='submit' id='submit' value='Entrar' type='submit' class='button' />
        </fieldset>
        </form>
        <a href='index.php'>Volver</a>";
        return $login;
    }

    public function setLogin() {
        session_start();
        require_once('lib/database.php');
        $database = new Database();
        $db = $database->connect();
        $page_mode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
        $errorString = "";
        if ($page_mode == 'login') {
            $this->password = $_POST['password'];
            $this->userName = $_POST['userName'];
//            $stmt = $db->prepare("INSERT INTO folks (name, addr, city) values ($name, $addr, $city)");
            $stmt = $db->prepare("SELECT * FROM team WHERE userName=?");
            $stmt->bindParam(1, $this->userName);
            $stmt->execute();
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $row = $stmt->fetch();
//            print_r($row);
//            $result = $db->exec("SELECT * FROM team WHERE userName='" . mysql_real_escape_string($this->userName) . "'");
            if (!$row)
                $this->errorString = 'Nombre de usuario<br>';
            elseif ($row['password'] != sha1($this->password)) {
                $this->errorString = "Clave en base de datos: " .$row['password'];
                $this->errorString .= "Clave introducida: " . sha1($this->password);
            }
//                $this->errorString = 'clave incorrecta.<br>';
            else {
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['user_name'] = $row['name'];
                header('Location: index.php');
                exit();
            }
        } else {
            $this->password = "";
            $this->userName = "";
        }
    }

}
?>