<header>
    
    <nav id="admin">
        <?php 
    session_start();
        if(isset($_SESSION['taikhoan'])){
            echo 'Xin Chào '.$_SESSION['taikhoan'].' <a href="">Đơn hàng</a> <a href="admin.php">Admin</a> <a href="template/thoat.php">Logout</a>';
        }else{
    ?>
        
        
        <ul>
            <li><a href="login.php">Admin</a></li>
            <li><a href="">Đơn hàng</a></li>
            <li><a href="login.php">Đăng nhập</a></li>
            <li><a href="regeristed.php">Đăng ký</a></li>
        </ul>
        
        <?php } ?>
    </nav>
        
    <img src="images/logophp1.png" alt="" />

    <form id="search">
        <input type="search" placeholder="Tìm kiếm" id="s1"/>
        <input type="submit" value="Tìm Kiếm" name="search" />
    </form>
    
</header>
<nav id="nav">
    <ul>
         <li><a href="index.php">Trang chủ</a></li>
        <li><a href="sanpham.php">Sản phẩm</a></li>
        <li><a href="tintuc.php">Tin tức</a></li>
        <li><a href="lienhe.php">Liên Hệ</a></li>
        <li><a href="bando.php">Bản đồ</a></li>
    </ul>
</nav>