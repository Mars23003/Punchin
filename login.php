<?php session_start(); ?>
<?php

if( !isset($_POST['nemail']) || !isset($_POST['npwd']) || $_POST['nemail']=="" || $_POST['npwd']=="" ){
//若沒有從Login submit或帳密為空白，就導回index.html
header("location:index.html");
}
else {
include_once('dbConn.php');

$email = $_POST['nemail'];
$pwd = $_POST['npwd'];

// 建立SQL字串，並執行SQL指令，先在SQL指令中要用?留下未來要Binding的資料，在excute中用array來Bind Data，這樣可避免SQL Injection的駭客攻擊
$sql = "SELECT * FROM `regT` WHERE( `email` = ? AND `pwd` = ? )";

//執行SQL指令，並取得資料結果集合
$sth = $conn->prepare($sql);
$sth->execute(array($email, $pwd));
$result = $sth->fetch(PDO::FETCH_OBJ);

if( $result ) {  //若有資料，表示帳號密碼正確，設定Session，並導向欲前往之頁面
$_SESSION['loginSuccess'] = true;
$_SESSION['loginEmail'] = $email;
$_SESSION['loginPwd'] = $pwd;
header("location:loginOK.php");
}
else {  //如果
echo "<h1 style='color:red;'>帳號密碼錯誤，請重新登入。</h1>";
echo "<p><a href='Login.php'>回到登入畫面</a></p>";
}

$conn = NULL;
}

?>
