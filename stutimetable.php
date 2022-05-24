<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>

    <style>
        table {
            text-align: center;
            border: aqua;
        }

        td {
            padding: 10px;
        }

        #top {
            color: crimson;
            font-style: italic;
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <h1 id="top">TIMETABLE</h1>
    <table border="l" width="100%">
        <thead>
            <tr>
                <td>Time</td>
                <td>9:00 - 9:50</td>
                <td>9:50 - 10:40</td>
                <td>10:40 - 11:30</td>
                <td>11:30 - 11:40</td>
                <td>11:40 - 12:30</td>
                <td>12:30 - 1:20</td>
                <td>1:20 - 2:00</td>

            </tr>
        </thead>
        <?php
        $connect = new mysqli('localhost', 'root', '', 'iwppro');
        $sql = "SELECT * FROM time1a";
        $result = $connect->query($sql);
        while ($row = $result->fetch_assoc()) {
        ?>
        <tbody>
            <tr>
                <td><?php echo $row['day']; ?></td>
                <td><?php echo $row['1st']; ?></td>
                <td><?php echo $row['2nd']; ?></td>
                <td rowspan="6">Break</td>
                <td><?php echo $row['3rd']; ?></td>
                <td><?php echo $row['4th']; ?></td>
                <td rowspan="6">Lunch</td>
                <td><?php echo $row['5th']; ?></td>
            </tr>
        <?php
        }
        ?>
        
           

        </tbody>
    </table>
</body>

</html>