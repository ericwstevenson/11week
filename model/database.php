<?php
    $dsn = 'mysql:host=qbhol6k6vexd5qjs.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=p9ua05r2r4j5isgx';
    $username = 'tdmw4pluehmdc6ll';
    $password = 'i543o4gm51d5olk2';
	
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>