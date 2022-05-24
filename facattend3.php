<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conclude</title>
</head>
<body>
    <h2>Conclusion</h2>
    <?php

        $connect = new mysqli('localhost', 'root', '', 'iwppro');
        $sql = "SELECT * FROM atten1a_new";
        $result = $connect->query($sql);
        $n = 0;
        while ($row = $result->fetch_assoc()) {
            $v = $_POST["stat$n"];
            $v2 = $row["regno"];
            echo $v."<br>";
            echo $v2."<br>";
            echo $n."<br>";
            $sql1 = "UPDATE atten1a_new SET telpre = telpre + $v, teltotal = teltotal + 1 WHERE regno = $v2";
            $result1 = $connect->query($sql1);
            
            $n += 1;
        }
    ?>
</body>
</html>