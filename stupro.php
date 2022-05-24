<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        body {
            background-color: #d0d0d0;
        }
        img {
            width: 70px;
            height: 70px;
            border-radius: 5px;
            margin-left: auto;
            margin-right: auto;
            display: block;
        }

        table {
            width: 70%;
            text-align: center;
            font-size: 20px;
            
        }
    </style>
</head>
<body>
    <h2>Profile</h2>
    <center>
        <table border="l">
            <tr><td colspan="2"><img src="astraliseSportss.jpg"></td></tr>

            <?php
            $connect = new mysqli('localhost', 'root', '', 'iwppro');
            $sql = "SELECT * FROM profile WHERE regno = 1179";
            $result = $connect->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
            
            <tr>
                <th>Name</th>
                <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
                <th>regno</th>
                <td><?php echo $row['regno']; ?></td>
            </tr>
            <tr>
                <th>Father Name</th>
                <td><?php echo $row['father']; ?></td>
            </tr>
            <tr>
                <th>Father phone</th>
                <td><?php echo $row['phone']; ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
    </center>
</body>
</html>