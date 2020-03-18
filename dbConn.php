<?php
$servername = "127.0.0.1";
$username = "root";
$password = "1qaz@wsx0988160897";
$port = "3306";
try {
    $conn = new PDO("mysql:host=$servername;dbname=punchin", $username, $password);
    //設定為utf8編碼，必要設定
$conn->query('SET NAMES "utf8"');  
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
    }
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
?>
