<?php
    include_once('dbConn.php');
    $name=$_POST['nname'];
    $pwd=$_POST['npwd'];
    $email=$_POST['nemail'];
    $phone=$_POST['nphone'];
    $identity='Teacher';

    $stmt = $conn->prepare("SELECT 'name' FROM regT WHERE 'email'='$email'");
    $stmt->execute();
    $count = $stmt->rowCount();//查詢到的行數
   // echo $count;
   if($count!=0){
     echo "名稱重複了！！重新註冊！ 三秒後回到註冊頁面";
     header("Refresh: 3; url=registrationT.html");
   }else{
       echo "註冊成功";
    $sql = "INSERT INTO `regT`(`name`, `pwd`, `identify`, `email`, `phone`) VALUES ('$name','$pwd','$identity','$email','$phone');";
    $conn->exec($sql);
   };
$conn = null;
?>
