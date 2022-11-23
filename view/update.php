<html>

<head>
    <style>

    </style>
</head>

<body>
    <form action="../controller/C_Employee.php?option=update" name="f2" method="post">--
        <div class="form-group">
            <label for="idnv">Mã nhân viên</label>
            <input type="text" id="idnv" name="IDNV" value="<?php echo $employee->IDNV ?>" readonly>
        </div>
        <div class="form-group">
            <label for="name">Tên nhân viên</label>
            <input type="text" id="name" name="Hoten" value="<?php echo $employee->Hoten ?>" placeholder="Nhập tên nhân viên...">
        </div>
        <div class="form-group">
            <label for="address">phòng ban</label>
            <input type="text" id="IDPB" name="IDPB" value="<?php echo $employee->IDPB ?>" placeholder="Nhập mã phòng ban...">
        </div>
        <div class="form-group">
            <label for="address">Địa chỉ</label>
            <input type="text" id="Diachi" name="Diachi" value="<?php echo $employee->Diachi ?>" placeholder="Nhập địa chỉ...">
        </div>
        <div class="center">
            <button type="submit" name="updatebtn" >Cập nhật</button>
            <button type="reset">Reset</button>
        </div>
    </form>
</body>

</html>