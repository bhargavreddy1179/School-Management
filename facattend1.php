<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance</title>
    <style>
        table, td {
            text-align: center;
            border-collapse: collapse;
        }
        td {
            height: 50px;
        }
    </style>
</head>

<body>
    <center>
        <h2>Classes You teach</h2>
        <hr>
        <table border="l" width="60%">
            <tr>
                <td>Class A</td>
                <td>
                    <form method="POST" action="facattend2.php">
                        <input type="submit" value="Attendance">
                    </form>
                </td>
            </tr>
        </table>
    </center>

</body>

</html>