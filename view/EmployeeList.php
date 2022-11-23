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
    <h2>Danh sách nhân viên:</h2>
    <table>
        <tr>
            <th>IDNV</th>
            <th>Hoten</th>
            <th>IDPB</th>
            <th>địa chỉ</th>
            <th>Xem chi tiết</th>
        </tr>
        <?php foreach ($employees as $e) : ?>
            <tr>
                <td><?php echo $e->IDNV ?></td>
                <td><?php echo $e->Hoten ?></td>
                <td><?php echo $e->IDPB ?></td>
                <td><?php echo $e->Diachi ?></td>
                <td><a href="../controller/C_Employee.php?option=<?php echo $option ?>&IDNV=<?php echo $e->IDNV ?> ">
                <?php  
                switch ($option) {
                    case 'show':
                        echo 'xem chi tiết';
                        break;
                    case 'update':
                        echo 'cập nhật';
                        break;
                    case 'delete':
                        echo 'xóa';
                        break;
                    default:
                        echo 'xem chi tiết';
                        break;
                }
                ?>
                </a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="../index.php" target="_parent">Home page</a></p>
</body>

</html>