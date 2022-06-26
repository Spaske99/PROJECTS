<?php

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
?>