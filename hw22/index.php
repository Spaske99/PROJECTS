<?php

class Connection {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "it_bootcamp";

    public function dbConnect() {
        $dsn = 'mysql:host=' . $this->host . ";dbname=" . $this->dbName;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}


class User extends Connection {
    public function Register ($username, $email, $password, $verified, $created) {
    $sql = "INSERT INTO users(username, email, password, email_verified_at, created_at) VALUES (?, ?, ?, ?, ?);";
    $stmt = $this->dbConnect()->prepare($sql);
    $stmt->execute([$username, $email, $password, $verified, $created]);
    }
}


try {
    $obj_1 = new User();
    $obj_2 = new User();
    $obj_3 = new User();
    $obj_4 = new User();
    $obj_5 = new User();
    $obj_6 = new User();
    $obj_7 = new User();
    $obj_8 = new User();
    $obj_9 = new User();
    $obj_10 = new User();

    $obj_1->register('Nenad', 'nenad@gmail.com', 'Spaske99', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_2->register('Sasa', 'sasa@gmail.com', 'Sale68', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_3->register('Tamara', 'tamara@gmail.com', 'Tami96', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_4->register('Jelena', 'jelena@gmail.com', 'Jeka1975', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_5->register('Nemanja', 'nemanja@gmail.com', 'Neca99', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_6->register('filip@gmail.com', 'Fica02', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour'))); //NEDOSTAJE IME ZBOG CEGA PUCA
    $obj_7->register('Bojan', 'bojan@gmail.com', 'Bokikostic', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_8->register('Andrija', 'andrija@gmail.com', 'Andra', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_9->register('Marija', 'marija@gmail.com', 'Makica', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
    $obj_10->register('Mihajlo', 'mihajlo@gmail.com', 'Boza99', date("Y-m-d h:i:s"), date("Y-m-d h:i:s", strtotime('next hour')));
} 

catch (\Throwable $exception) {
    echo "Error!" . $exception->getMessage();
}
?>