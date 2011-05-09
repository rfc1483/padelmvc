<?php

require_once('lib/database.php');

class Login {

    private $errorString;
    private $result;
    private $password;
    private $userName;

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
            <input name='password' id='password' type='text' />
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


        $page_mode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
        $errorString = "";
        if ($page_mode == 'login') {
            $this->password = sha1($_POST['password']);
            $this->userName = $_POST['userName'];

            try {
                $dbh = new Database();
                $data = array(
                    ':userName' => $this->userName,
                    ':password' => $this->password
                );
                $sql = "SELECT * FROM team WHERE userName=:userName AND password = :password";
                $sth = $dbh->prepare($sql);
                $sth->execute($data);
                $sth->setFetchMode(PDO::FETCH_ASSOC);
                $row = $sth->fetch();
            } catch (PDOException $e) {
                echo "I'm sorry, Dave. I'm afraid I can't do that.";
                file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
                echo $e->getMessage();
            }
            if (!$row) {
                $this->errorString = 'Clave o nombre de usuario incorrectos<br>';
            } else {
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