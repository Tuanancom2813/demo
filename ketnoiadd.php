<?php
	$servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hoclaravel";
    
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con -> connect_error){
        die("Connect failed");
    }

    $mahang = '';
    $tenhang = '';
    $soluong = '';

    if(isset($_POST["submit"])) {
        $mahang = $_POST["mahang"];
        $tenhang = $_POST["tenhang"];
        $soluong = $_POST["soluong"];
    }
    $sql = "INSERT INTO users (fullname, email, create_at) VALUES ('$mahang', '$tenhang', '$soluong')";
    
    if ($con->query($sql) === TRUE) {
        // echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
    }

    $sql1 = "SELECT * FROM users";
    $result = $con->query($sql1);


    $con->close();
?>