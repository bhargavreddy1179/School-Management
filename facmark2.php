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
        <form action="facmark3.php" method="POST">
            <table border="l" width="70%">
                <tr>
                    <td>Student name</td>
                    <td>Enter marks</td>
                </tr>
                <?php
                $connect = new mysqli('localhost', 'root', '', 'iwppro');
                $sql = "SELECT * FROM eng";
                $result = $connect->query($sql);
                $n = 0;
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row["regno"]; ?></td>
                        <td><input type="number" name="sta<?php echo $n; ?>"></td>
                    </tr>
                <?php
                $n += 1;
                }
                ?>
                <tr>
                    <td>Test name</td>
                    <td><input type="text" name="tt"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit"></td>
                </tr>
            </table>
        </form>
    </center>
</body>

</html>