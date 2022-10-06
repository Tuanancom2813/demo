<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xóa người dùng</title>
    <link rel="stylesheet" href="demo.css">
</head>
<body>
    <?php require("ketnoidelete.php"); ?>
    <div class="form">
    <form action="#" method="post">
        <h3>Thêm sản phẩm </h3>
        <table>
            <tr>
                <th>Mã hàng:</th>
                <td><input type="text" name="mahang" value=""></td>
            </tr>

            <tr>
                <th>Tên hàng:</th>
                <td><input type="text" name="tenhang" value=""></td>
            </tr>

            <tr>
                <th>Số lượng:</th>
                <td><input type="text" name="soluong" value=""></td>
            </tr>

            <tr>
                <th>Hình ảnh</th>
                <td><input type="text" name="hinhanh" value=""></td>
                <td><input type="submit" value="Browse"></td>
            </tr>

            <tr>
                <th>Mô tả:</th>
                <td><textarea cols="25" rows="5" name="mota" style="width:174px; height: 74px;"></textarea></td>
            </tr>

            <tr>
                <th>Đơn giá:</th>
                <td><input type="text" name="dongia" value=""></td>
            </tr>

            <tr>
                <th>Loại SP:</th>
                <td>
                    <select name="loaisp">
                        <option value="" selected="selected">---Chọn loại Sản phẩm---</option>
                        <?php foreach ($result as $key => $value) {?>
                        <option value=""> <?php echo $value["fullname"]; ?> </option>
                        <?php } ?>
                    </select>
                </td>
            </tr>
        </table>
        <input style="margin:25px 15px 0px 0px;" type="submit" value="Xóa" name="submit">
    </form>

    </div>
</body>
</html>