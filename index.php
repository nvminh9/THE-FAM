<?php
    require_once "model/user.php";
?>
<?php
    session_start();
    ob_start();
?>
<?php
    if((isset($_SESSION['username'])) && (isset($_SESSION['password']))){
        if(($_SESSION['username'] != "") && ($_SESSION['password'] != "")){
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="view/css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
        <title>WHOLE GANG</title>
    </head>
    <body>
            <div class="wrapper">

                <?php
                    require "view/header.php";
                ?>  

                <div class="content">
                    <?php
                        if(isset($_GET['act'])){
                            switch($_GET['act']){
                                case 'gioithieu':
                                    require "view/gioithieu.php";
                                    break;
                                case 'out':
                                    session_unset();
                                    header('location: http://localhost/The%20Fam/');
                                    break;
                                case 'hinhanh':
                                    require "view/hinhanh.php";
                                    break;
                                case 'profile':
                                    require "view/profile.php";
                                    break;
                            }
                        }
                    ?>
                </div>
            </div>
    </body>
    </html>
    <?php
    // echo "<pre>";
    // print_r($_POST);
    // echo "<pre>";
    // print_r($_SESSION);
    ?>
<?php
        }
    }else {
        require "view/login.php";
    }
?>    