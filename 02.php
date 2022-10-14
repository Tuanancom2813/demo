<?php
    session_start();

    $array = array(
        array('course' => 'joomla', 'time' => 80),
        array('course' => 'zend', 'time' => 100)
    );

    $_SESSION['array'] = $array;
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';