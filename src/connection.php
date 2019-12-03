<?php

// mysqli_report(MYSQLI_REPORT_ERROR);

// $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWD, DB_NAME);


try {
    $conn = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME, DB_USER, DB_PASSWD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'Connection failed' . $e->getMessage();
}
