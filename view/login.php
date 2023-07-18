

<?php
    if((isset($_POST['dangnhap'])) && ($_POST['dangnhap'])){
        // $_SESSION['username'] = $_POST['username'];
        // $_SESSION['password'] = $_POST['password'];
        for($i = 0; $i<count($username); $i++){
            if(($_POST['username']==$username[$i]) && ($_POST['password']==$password[$i])){
                $_SESSION['username'] = $_POST['username'];
                $_SESSION['password'] = $_POST['password'];
                header('location: http://localhost/The%20Fam/index.php');
            }else {
                $txt_error = "Try again :v";  
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="view/css/login.css">
    <title>Login | THEFAM</title>
</head>
<body>
    <div class="wrapper">

        <div class="boxlogin">
            <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
                <h1>Đăng nhập</h1>
                <input type="text" name="username" placeholder="Nhập username"> <br>
                <input type="password" name="password" placeholder="Nhập password"> <br>
                <input class="btndangnhap" type="submit" name="dangnhap" value="Let's go"> <br>
                <br>
                <?php
                    if(isset($txt_error) && ($txt_error != "")){
                        echo "<font color='crimson'>".$txt_error."</font>";
                    }
                ?>
            </form>
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