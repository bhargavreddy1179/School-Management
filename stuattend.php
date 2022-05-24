<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <style>
        table {
            width: 60%;
            margin-left: 20%;
            text-align: center;
        }

        th {
            padding: 10px;
        }

        td {
            padding: 10px;
        }

        h2 {
            text-decoration: underline;
            color: springgreen;
        }
    </style>
</head>

<body>
    <h2>ATTENDANCE</h2>
    <table border="l">
        <thead>
            <tr>
                <th>Subject</th>
                <th>No.of classes attended</th>
                <th>Total classes</th>
            </tr>
        </thead>

        <tbody>

            <?php
            $connect = new mysqli('localhost', 'root', '', 'iwppro');
            $sql = "SELECT * FROM atten1a_new WHERE regno = 1181";
            $result = $connect->query($sql);
            $row = $result->fetch_array(MYSQLI_ASSOC);
            ?>
            <tr>
                <td><?php echo $row["course"]; ?></td>
                <td><?php echo $row["telpre"]; ?></td>
                <td><?php echo $row["teltotal"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["coursehin"]; ?></td>
                <td><?php echo $row["hinpre"]; ?></td>
                <td><?php echo $row["hintotal"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["courseeng"]; ?></td>
                <td><?php echo $row["engpre"]; ?></td>
                <td><?php echo $row["engtotal"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["coursemat"]; ?></td>
                <td><?php echo $row["matpre"]; ?></td>
                <td><?php echo $row["mattotal"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["coursesci"]; ?></td>
                <td><?php echo $row["scipre"]; ?></td>
                <td><?php echo $row["scitotal"]; ?></td>
            </tr>
            <tr>
                <td><?php echo $row["coursesoc"]; ?></td>
                <td><?php echo $row["socpre"]; ?></td>
                <td><?php echo $row["soctotal"]; ?></td>
            </tr>
        </tbody>
    </table>
</body>

</html>