<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang bán hàng</title>
    <link rel="stylesheet" href="demo.css">
</head>
<body>
    <div class="main">
        <div class="header">
            <i> Bài kiểm tra: Lập trình web với PHP </i>
            <br>
            <br>
            <i> Họ và tên học viên: Nguyễn Văn A </i>
        </div>
        <div class="line-w"></div>
        <div class="footer">
            <ul class="list" type="none">
                <li> Danh mục loại sách </li>
                <div class="line-n"></div>
                <li> Sách văn học </li>
                <div class="line-n"></div>
                <li> Sách công nghệ </li>
                <div class="line-n"></div>
                <li> Sách khoa học tự nhiên </li>
                <div class="line-n"></div>
            </ul>
        </div>
        <div class="line-h"></div>
        <?php require("ketnoiimport.php");?>
        <div class="sidebar">
            <p class="title"> Danh mục sách </p>
            <?php
                foreach($result as $key => $value) { ?>
                    <div class="product">
                        <img src="#" alt="product">
                        <p> Tên sản phẩm: <?php echo $value["fullname"]; ?></p>
                        <p> Giá: <?php echo $value["email"]; ?>  </p>
                        <a href="#"> Chi tiết </a>
                    </div>
            <?php } ?>
            <div class="pagination">
                <a class="active" href="#">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
            </div>
        </div>
    </div>   
</body>
</html>