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

    public function getErrorString() {
        return $this->errorString;
    }

    public function getUserName() {
        return $this->userName;
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
                $_SESSION['userId'] = $row['id'];
                $_SESSION['userName'] = $row['userName'];
//                if (isset($_SESSION))
//                    print_r($_SESSION);
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