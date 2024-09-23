<?php
    $dsn = 'mysql:host=joecool.highpoint.edu;dbname=CSC3212_S24_cfield_db';
    $username = 'cfield';
    $password = '1863859';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>
