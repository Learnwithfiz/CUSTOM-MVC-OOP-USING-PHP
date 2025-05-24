<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>

        <tbody>

            <?php
                foreach($data['data'] as $row)
                {
                    
                    ?>
                        <tr>
                            <td><?php echo $row['Id']; ?></td>
                            <td><?php echo $row['Name']; ?></td>
                            <td><?php echo $row['Email']; ?></td>
                        </tr>
                    <?php
                }
            ?>
        </tbody>
    </table>
</body>
</html>