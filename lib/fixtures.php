<?php

require_once('database.php');

class Fixtures {

    public function dropTableTeam() {
        try {
            $dbh = new Database();
            $sql = "DROP table IF EXISTS team";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that. <br />";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
        }
    }

    public function dropTableAdmin() {
        try {
            $dbh = new Database();
            $sql = "DROP table IF EXISTS admin";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that. <br />";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
        }
    }

    public function dropTableLeague() {
        try {
            $dbh = new Database();
            $sql = "DROP table IF EXISTS league";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that. <br />";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
        }
    }

    public function createTableTeam() {
        try {
            $dbh = new Database();
            $sql = "create table IF NOT EXISTS team (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name1 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                surname1 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                name2 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                surname2 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                userName VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                password VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                phone1 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                phone2 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                email1 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                email2 VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci
                )CHARACTER SET utf8 COLLATE utf8_general_ci";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that. <br />";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
        }
    }

    public function createTableAdmin() {
        try {
            $dbh = new Database();
            $sql = "create table IF NOT EXISTS admin (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                userName VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                password VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci
                )CHARACTER SET utf8 COLLATE utf8_general_ci";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
        }
    }

    public function createTableLeague() {
        try {
            $dbh = new Database();
            $sql = "CREATE TABLE IF NOT EXISTS league (
                id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
                name VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                status VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci,
                year VARCHAR(255) CHARACTER SET utf8 COLLATE utf8_general_ci
                )CHARACTER SET utf8 COLLATE utf8_general_ci";
            $sth = $dbh->prepare($sql);
            $sth->execute();
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage() . "\n", FILE_APPEND);
        }
    }

    public function insertLeague(array $league) {
        require_once('../lib/database.php');
        try {
            extract($league);
            $data = array(
                ':name' => $name,
                ':status' => $status,
                ':year' => $year
            );
            echo '<pre>';
            print_r($data);

            $dbh = new Database();
            $sql = "insert into league (name, status, year) VALUES (:name, :status, :year)";
            $sth = $dbh->prepare($sql);
            $sth->execute($data);
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
    }

    public function insertTeam(array $team) {
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
            $sth = $dbh->prepare($sql);
            $sth->execute($data);
            $db = null;
        } catch (PDOException $e) {
            echo "I'm sorry, Dave. I'm afraid I can't do that.";
            file_put_contents('PDOErrors.txt', $e->getMessage(), FILE_APPEND);
        }
    }

    public function insertAdmin(array $team) {
        require_once('../lib/database.php');
        try {
            extract($team);
            $data = array(
                ':userName' => $userName,
                ':password' => sha1($password)
            );
            echo '<pre>';
            print_r($data);

            $dbh = new Database();
            $sql = "insert into admin (userName, password) VALUES (:userName, :password)";
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

$admin = array(
    'userName' => 'admin',
    'password' => 'admin123'
);

$league1 = array(
    'name' => 'First league',
    'status' => 'Active',
    'year' => '2011'
);
$league2 = array(
    'name' => 'Second league',
    'status' => 'Active',
    'year' => '2011'
);
$league3 = array(
    'name' => 'Third league',
    'status' => 'Active',
    'year' => '2011'
);

$fixtures = new Fixtures();
$fixtures->dropTableTeam();
$fixtures->createTableTeam();
$fixtures->insertTeam($team1);
$fixtures->insertTeam($team2);
$fixtures->insertTeam($team3);

$fixtures->dropTableAdmin();
$fixtures->createTableAdmin();
$fixtures->insertAdmin($admin);

$fixtures->dropTableLeague();
$fixtures->createTableLeague();
$fixtures->insertLeague($league1);
$fixtures->insertLeague($league2);
$fixtures->insertLeague($league3);
