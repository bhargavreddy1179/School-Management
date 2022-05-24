<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marks</title>
    <style>
        table {
            text-align: center;
        }
        body {
            background-color: #d0d0d0;
        }
        td,
        th {

            width: 300px;
            height: 30px;
        }
    </style>
</head>

<body>
    <center>
        <h2>Marks</h2>
        <table border="l" width="70%">
            <tr>
                <th>Subject</th>
                <th>Mid1</th>
                <th>Mid2</th>
                <th>St2</th>
                <th>St1</th>
                <th>Final</th>
            </tr>

            <?php
            $connect = new mysqli('localhost', 'root', '', 'iwppro');
            $sql = "SELECT * FROM eng WHERE regno = 1179";
            $result = $connect->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['sub']; ?></td>
                    <td><?php echo $row['st1']; ?></td>
                    <td><?php echo $row['st2']; ?></td>
                    <td><?php echo $row['mid1']; ?></td>
                    <td><?php echo $row['mid2']; ?></td>
                    <td><?php echo $row['final']; ?></td>
                </tr>
            <?php
            }
            ?>
            <?php
            $sql = "SELECT * FROM mat WHERE regno = 1179";
            $result = $connect->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['sub']; ?></td>
                    <td><?php echo $row['st1']; ?></td>
                    <td><?php echo $row['st2']; ?></td>
                    <td><?php echo $row['mid1']; ?></td>
                    <td><?php echo $row['mid2']; ?></td>
                    <td><?php echo $row['final']; ?></td>
                </tr>
            <?php
            }
            ?>
            <?php
            $sql = "SELECT * FROM sci WHERE regno = 1179";
            $result = $connect->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <tr>
                    <td><?php echo $row['sub']; ?></td>
                    <td><?php echo $row['st1']; ?></td>
                    <td><?php echo $row['st2']; ?></td>
                    <td><?php echo $row['mid1']; ?></td>
                    <td><?php echo $row['mid2']; ?></td>
                    <td><?php echo $row['final']; ?></td>
                </tr>
        </table>
    <?php
            }
    ?>
    </center>

</body>

</html>