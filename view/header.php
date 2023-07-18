<?php
    $header = array("Giới thiệu", "Hình ảnh", "Thành viên", "Music", "Court", "OUT")
?>
<?php
    $headerhref = array("gioithieu", "hinhanh", "thanhvien", "music", "court", "out")
?>

<div class="header">
            <ul class="menu">
                <li class="wassup"><a href="">Wassup <?php echo $_SESSION['username'];?></a></li>
                <li class="logo">
                    <a class="thefam" href="index.php">THEFAM</a>
                    <ul class="submenu">
                        <?php
                                for($i = 0; $i<count($header); $i++){
                        ?>
                                <li><a href="index.php?act=<?php echo $headerhref[$i] ?>"><?php echo $header[$i] ?></a></li>
                        <?php
                                }
                        ?>
                    </ul>
                </li>
            </ul>     
        </div>