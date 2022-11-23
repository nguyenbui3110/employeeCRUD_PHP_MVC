<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>

<body>
    <h2>Danh sách phòng ban:</h2>
    <table>
        <tr>
            <th>IDPB</th>
            <th>Tên phòng ban</th>
            <th>Mô tả</th>
            <th>danh sách</th>
        </tr>
        <?php foreach ($departmentList as $apartment) {?>
            <tr>
                <td><?php echo $apartment->IDPB ?></td>
                <td><?php echo $apartment->tenpb ?></td>
                <td><?php echo $apartment->mota ?></td>
                <td><a href='?option="show"&idpb="<?php echo $apartment->IDPB ?>" '>...</a>  </td>
            </tr>
        <?php } ?>
    </table>
    <p><a href="../index.php" target="_parent">Home page</a></p>
</body>

</html>