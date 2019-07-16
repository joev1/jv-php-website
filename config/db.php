<?php

$dsn = 'mysql:host=db;dbname=jv';
$psw = getenv('MYSQL_ROOT_PASSWORD');

//    try {
        $pdo = new PDO($dsn, 'root', $psw);

//        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//        echo "Connection successfully";
//
//        } catch (PDOException $e) {
//            echo "Connection failed" . $e->getMessage();
//        }


