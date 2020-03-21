<?php session_start(); ?>
<?php
    if($_SESSION['loginSuccess'] != true){
       echo "<h1 style='color:red;'>尚未登入，請登入</h1>";
       echo "<p><a href='Login.php'>回到登入畫面</a></p>";
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>雲端打卡系統</title>
    <meta name="description" content="這是個好東西">
    <meta name="author" content="MarsLin">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <hr style="margin: 3em 0;" />
                <h1 class="text-center">
                    凱莉豆格家教中心
                </h1>
                <hr style="margin: 3em 0;" />
                <img alt="這裡有張圖片" title="沒看過柯基喔" src="img/corgi.png" class="img-fluid  mx-auto d-block " width=50%>
                <hr style="margin: 1em 0;" />

            </div>
            <div class="col-md-4">
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>
