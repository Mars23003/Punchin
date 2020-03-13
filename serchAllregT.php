<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>num</th><th>name</th><th>pwd</th><th>identity</th><th>E-mai;</th><th>phone</th></tr>";

class TableRows extends RecursiveIteratorIterator {
    function __construct($it) {
        parent::__construct($it, self::LEAVES_ONLY);
    }

    function current() {
        return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() {
        echo "<tr>";
    }

    function endChildren() {
        echo "</tr>" . "\n";
    }
}

    include('dbConn.php');
    $name=$_POST['nname'];
    $pwd=$_POST['npwd'];
    $email=$_POST['nemail'];
    $phone=$_POST['nphone'];
    $identity='Teacher';

    $stmt = $conn->prepare("SELECT * FROM regT");
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
        echo $v;}
$conn = null;
echo "</table>";
?>
