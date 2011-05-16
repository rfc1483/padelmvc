<?php

class Fixtures {

    public function insert(array $team) {
        require_once('../lib/database.php');
        try {
            extract($team);
            $data = array(
                ':name1' => $name1,
                ':surname1' => $surname1,
                ':phone1' => $phone1,
                ':email1' => $email1,
                ':name2' => $name2,
                ':surname2' => $surname2,
                ':phone2' => $phone2,
                ':email2' => $email2,
                ':userName' => $userName,
                ':password' => sha1($password)
            );
            echo '<pre>';
            print_r($data);

            $dbh = new Database();
            $sql = "insert into team (name1, surname1, phone1, email1, name2,
                surname2, phone2, email2, userName, password) 
                VALUES (:name1, :surname1, :phone1, :email1, :name2, :surname2, 
                :phone2, :email2, :userName, :password)";
//            $sql = "insert into team (name1) VALUES (:name1)";
//            insert into team (name1) values ('test')
            $sth = $dbh->prepare($sql);
            $sth->execute($data);
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
    }

}

$team1 = array(
    'name1' => 'Mirentxu',
    'surname1' => 'Vera',
    'phone1' => '986304040',
    'email1' => 'vera@gmail.com',
    'name2' => 'Maria Jose',
    'surname2' => 'Moure',
    'phone2' => '986304050',
    'email2' => 'moure@gmail.com',
    'userName' => 'veraMoure',
    'password' => 'vera'
);

$team2 = array(
    'name1' => 'Xandra',
    'surname1' => 'Lopez',
    'phone1' => '986304060',
    'email1' => 'lopez@gmail.com',
    'name2' => 'Paola',
    'surname2' => 'Strasser',
    'phone2' => '986304070',
    'email2' => 'strasser@gmail.com',
    'userName' => 'lopezStrasser',
    'password' => 'lopez'
);

$team3 = array(
    'name1' => 'Loreto',
    'surname1' => 'Ramos',
    'phone1' => '986304080',
    'email1' => 'ramos@gmail.com',
    'name2' => 'Carla',
    'surname2' => 'Barciela',
    'phone2' => '986305010',
    'email2' => 'barciela@gmail.com',
    'userName' => 'ramosBarciela',
    'password' => 'ramos'
);

$fixtures = new Fixtures();
$fixtures->insert($team1);
$fixtures->insert($team2);
$fixtures->insert($team3);
