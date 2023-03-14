<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK104.php</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
        th {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $smartphone = ["Samsung Galaxy S22","Samsung Galaxy S22+","Samsung Galaxy A03","Samsung Galaxy Xcover 5"];
    ?>

    <table>
        <tr> <th>Daftar Smartphone Samsung</th> </tr>

        <tr>
            <td><?php echo $smartphone[0]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[1]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[2]?></td>
        </tr>
        <tr>
            <td><?php echo $smartphone[3]?></td>
        </tr>
    </table>
</body>
</html>