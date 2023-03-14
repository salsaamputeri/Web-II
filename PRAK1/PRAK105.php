<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK105.php</title>
    <style>
        table, tr, td, th{
            border: 1px solid black;
        }
        th {
            font-weight: bold;
            font-size: 23px;
            background-color: red;
            padding: 16px;
        }
    </style>
</head>
<body>
    <?php
        $smartphone = [1=>"Samsung Galaxy S22",2=>"Samsung Galaxy S22+",3=>"Samsung Galaxy A03",4=>"Samsung Galaxy Xcover 5"];
    ?>
    <table>
        <tr> <th>Daftar Smartphone Samsung</th> </tr>
        <tr>
            <?php foreach($smartphone as $samsung) : ?>
            <td><?php echo ($samsung)?></td>
        </tr>
    <?php endforeach?>
    </table>
</body>
</html>