<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hoclaravel";
    
    $con = new mysqli($servername, $username, $password, $dbname);
    if ($con -> connect_error){
        die("Connect failed");
    }

    $sql = "SELECT * FROM users";
    $result = $con->query($sql);
?>