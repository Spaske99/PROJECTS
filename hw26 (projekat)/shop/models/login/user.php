<?php


include ('db.php');


class Users extends DB { //nas korisnik, korisnik koga pravimo, registrujemp, extend db da bi moglo da se povezuje sa bazom

    public function setUsers($name, $email, $password) {
        if(!empty($name) && !empty($email) && !empty($password)) {
            $sql1 = "SELECT * FROM profile WHERE email=?";
            $st = $this->connect()->prepare($sql1);
            $st->execute([$email]);
        } 
        // else {
        //     $error="Niste uneli sve podatke !";
        //     return $error;
        //     die('Niste uneli sve podatke !');
        // }

        if($st->rowCount() == 0) {
            $sql = "INSERT INTO profile (username, email, password) VALUES (?, ?, ?);";
            $stmt = $this->connect()->prepare($sql); ///prepare kada su neki parametri ? pripremi to pa onda izvrsava
            $stmt->execute([$name, $email, $password]);//execute kad imamo prepare
            echo "Uspesna registracija. <br><br>";
        }
        else {
            echo "Korisnik sa navedenim email-om vec postoji !<br><br>"; 
        } 
    }

    public function Login ($email, $password) {
        if(!empty($email) && !empty($password)) {
            $sql1 = "SELECT * FROM profile WHERE email=? and password=?";
            $st = $this->connect()->prepare($sql1);
            $st->execute([$email, $password]);
        }
        // else {
        //     die('Niste uneli sve podatke !');
        // }

        if ($st->rowCount() == 1) {
            echo "You are logged in successfully";
        } else {
            echo "You need to register an account";
        }
    }

    // public function getUsers() {
    //     $sql1 = "SELECT * FROM profile WHERE email=?";
    //     $stmt = $this->connect()->query($sql);//statement ->query sa nasim sql-om
    //     while ($row = $stmt->fetch()) { // 'user' moze da se zameni sa bilo cim
    //         echo $row['ime'] . " " . $row['prezime'] . " " . $row['email'] . "<br>";
    //     }
    // }


}


?>