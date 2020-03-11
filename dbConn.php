<?php
$server = "localhost";         # MySQL/MariaDB 伺服器
$dbuser = "root";       # 使用者帳號
$dbpassword = "1qaz@wsx0988160897"; # 使用者密碼
$dbname = "test_db";    # 資料庫名稱

$conn= new mysqli_connect($server,$dbuser, $dbpassword,$dbname);
if (!$conn) {
　die(' 連線失敗，輸出錯誤訊息 : ' . mysql_error());
}
echo ' 連線成功 ';

?>

