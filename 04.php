<?php
    session_start();

    if(isset($_SESSION['name'])) {
        echo 'Tồn tại';
    }
    $_SESSION['name'] = 'Nguyễn Văn B';