<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class A</title>
    <style>
        table {
            text-align: center;
        }
    </style>
</head>

<body>
    <center>
        <h2>Class A</h2>
        <hr>
        <form method="POST" action="facattend3.php">
            <table border="l" width="70%">
                <tr>
                    <td>Regno</td>
                    <td>Student name</td>
                    <td>Status</td>
                </tr>
                <?php
                $connect = new mysqli('localhost', 'root', '', 'iwppro');
                $sql = "SELECT * FROM atten1a_new";
                $result = $connect->query($sql);
                $n = 0;
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row["regno"]; ?></td>
                        <td><?php echo $row["name"]; ?></td>
                        <td><input type="number" name="stat<?php echo $n; ?>"></td>
                    </tr>

                <?php
                    $n += 1;
                }
                ?>
                <tr>
                    <td colspan="3"><input type="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>