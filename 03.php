
<?php
    session_start();
    $_SESSION['file'] = '   <!DOCTYPE html>
                            <html lang="en">
                            <head>
                                <meta charset="UTF-8">
                                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                                <title>Demo</title>
                            </head>
                            <body>
                                <h1> This is a file </h1>
                            </body>
                            </html>
                            <?php
                                function checkNumber($n) {
                                    return ($n % 2 == 0) ? "Số chẵn" : "Số lẻ"; 
                                }
                            ?>';
                            eval('?>' . $_SESSION['file']);
                            echo checkNumber(4);
?>
