<?php
$connect = new mysqli('localhost', 'root', '', 'iwppro');
$sql = "SELECT * FROM eng";
$result = $connect->query($sql);
$n = 0;
while ($row = $result->fetch_assoc()) {
    $v = $_POST["sta$n"];
    $v2 = $_POST["tt"];
    $v3 = $row["regno"];
    echo $v."<br>";
    echo $v2."<br>";
    echo $v3."<br>";
    $sql1 = "UPDATE eng SET $v2 = $v WHERE regno = $v3";
    $result1 = $connect->query($sql1);
    
    $n += 1;
}
?>