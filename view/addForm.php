<html>
    <head>
        <style>

        </style>
    </head>
    <body>
        <form action="../controller/C_Employee.php?option=add" name="f2" method="post">--
            <div class="form-group">
                <label for="name">Tên nhân viên</label>
                <input type="text" id="Hoten" name="Hoten" placeholder="Nhập tên nhân viên...">
            </div>
            <div class="form-group">
                <label for="department">Phòng ban</label>
                <select id="IDPB" name="IDPB">
                <option>1</option>
                <option>2</option>
                <option>3</option>
                </select>
            </div>
            <div class="form-group">
                <label for="address">Địa chỉ</label>
                <input type="text" id="Diachi" name="Diachi" placeholder="Nhập địa chỉ...">
            </div>
            <div class="center">
                <button type="submit" name="addbtn">Thêm</button>
                <button >Reset</button>
            </div>
        </form>
    </body>
</html>