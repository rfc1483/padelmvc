<?php

require_once('lib/database.php');

class Login {

    private $errorString;
    private $password;
    private $userName;
    private $tableName;

    function __construct($tableName) {
        $this->errorString = '';
        $this->tableName = $tableName;
    }

    public function getErrorString() {
        return $this->errorString;
    }

    public function getUserName() {
        return $this->userName;
    }

    public function setSession() {
        session_start();
        $page_mode = isset($_POST['page_mode']) ? $_POST['page_mode'] : '';
        if ($page_mode == 'login') {
            echo "page mode = login!";
            $this->password = sha1($_POST['password']);
            $this->userName = $_POST['userName'];

            try {
                $dbh = new Database();
                $data = array(
                    ':userName' => $this->userName,
                    ':password' => $this->password
                );
                echo $this->userName;
                echo $this->password;
                $sql = "SELECT * FROM $this->tableName WHERE user_name=:userName AND password = :password";
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
                $this->errorString = 'Clave o nombre de usuario incorrectos';
            } else {
                $_SESSION['userId'] = $row['team_id'];
                $_SESSION['userName'] = $row['user_name'];
//                header('Location: index.php');
            }
        }
    }

}

?>