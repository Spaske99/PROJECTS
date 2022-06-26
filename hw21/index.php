<!--
1. SELECT * FROM `colors` WHERE Status='1' ORDER BY created_at;
2. SELECT hex_value FROM `colors` ORDER BY RAND() LIMIT 5;
3. INSERT INTO `colors`(`Name`, `hex_value`, `status`) VALUES ('Purple','#800080','1');
4. UPDATE `colors` SET status='1' WHERE status='0';
5. DELETE FROM `colors` WHERE id='5';
6. DELETE FROM `colors` ORDER BY update_at ASC LIMIT 1; 
-->


<?php
class DB {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbName = "it_bootcamp";
    public function connect() {
        $dsn = 'mysql:host=' . $this->host . ";dbname=" . $this->dbName;
        $pdo = new PDO($dsn, $this->username, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    }
}

class Colors extends DB {
    public function getColors() {
        $sql = "SELECT * FROM `colors` WHERE Status='1' ORDER BY created_at";
        $stmt = $this->connect()->query($sql);
        while ($row = $stmt->fetch()) {
            echo $row['name'] . " - " . $row['hex_value']. '<br>';
        }
        
    }
}

$komanda = new Colors();
$komanda->getColors();
?>