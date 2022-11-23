<html>
    <head>
        <style>
            a{
                color: red;
            }
            ul{
                list-style-type: none;
                justify-content: center;
                padding-left: 0px;
            }
            .box li{
                padding: 5px 0px;
            }
            .box li a{
                color: #ccc;
                text-decoration: none;
                list-style-type: none;
            }
        </style>

    </head>
    <body bgcolor="#222C38">
        <div class="box">
            <ul>
                    <li><a href="../controller/C_Admin.php?option=login" target="t3">Trang chủ</a></li>
                    <li><a href="../controller/C_Employee.php?option=show" target="t3">DS nhân viên</a></li>
                    <li><a href="../controller/C_Department.php?option=show" target="t3">DS phòng ban</a></li>
                    <li><a href="../view/SearchForm.php" target="t3">Tìm kiếm</a></li>
                    <li><a href="../controller/C_Employee.php?option=add" target="t3">Thêm nhân viên</a></li>
                    <li><a href="../controller/C_Employee.php?option=update" target="t3">Cập nhật</a></li>
                    <li><a href="../controller/C_Employee.php?option=delete" target="t3">Xoá nhân viên</a></li>
                    <li><a href="../controller/C_Admin.php?option=logout" target="t3">đăng xuất</a></li>                              
            </ul>
        </div>
    </body>
    <script>

    </script>
</html>
