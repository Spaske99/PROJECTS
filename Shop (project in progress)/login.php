<?php
session_start();
require_once __DIR__ . "./models/user-login.php";
require_once __DIR__ . "./models/db.php";
$login='login';

if (isset($_GET['submit1'])) {
    $email = $_GET['email'];
    $password = $_GET['password'];

    $object = new Users();
    $object->Login($email, $password);
}

if (isset($_GET['submit2'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    $object = new Users();
    $object->setUsers($name, $email, $password);
}

// HEADER
require __DIR__ . "/views/_layout/v-header.php";
// PAGE
require __DIR__ . "/views/v-login.php";
// FOOTER
require __DIR__ . "/views/_layout/v-footer.php";





?>