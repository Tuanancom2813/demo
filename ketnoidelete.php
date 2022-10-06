<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hoclaravel";
    
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con -> connect_error){
        die("Connect failed");
    }

    $sql1 = "SELECT * FROM users";
    $result = $con->query($sql1);

    $mahang = "";
    if (isset($_POST["submit"])) {
        $mahang = $_POST["mahang"];
    }
    $sql = "DELETE FROM users WHERE fullname = '$mahang' ";

    if ($con->query($sql) === TRUE ) {
        // echo "Xóa sản phẩm thành công";
    }

?>