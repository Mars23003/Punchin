<?php
    include('dbConn.php');
    $name=$_POST['nname'];
    $pwd=$_POST['npwd'];
    $email=$_POST['nemail'];
    $phone=$_POST['nphone'];
    $identity='Teacher';

    $stmt = $conn->prepare("SELECT 'name' FROM regT WHERE 'name'=$name");
    $stmt->execute();
    $count = $stmt->rowCount();//查詢到的行數
   // echo $count;
   if($count!=0){
    echo "已註冊";
    $sql = "INSERT INTO `regT`(`name`, `pwd`, `identify`, `email`, `phone`) VALUES ('$name','$pwd','$identity','$email','$phone');";
    $conn->exec($sql);
   }else{
     echo "名稱重複了！！重新註冊！ 三秒後回到註冊頁面";
     header("Refresh: 3; url=registrationT.html");
   };

$conn = null;

?>
