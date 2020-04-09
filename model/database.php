<?php
    $dsn = 'mysql:host=vhw3t8e71xdz9k14.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=dfgag39ppo29umva';
    $username = 'mqv8xkrvzvmssv0b';
    $password = 'jqtkftdjvdhb8n6s';
	
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>