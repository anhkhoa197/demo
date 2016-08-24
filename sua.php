<?php include "database.php"; ?>
<?php 
        if(isset($_POST['submit'])){


            
            
            
            $id=$_POST['masp'];
            $acc = $_POST['tensp'];
            $passw = $_POST['giasp'];
            $name = $_POST['ngaynhapsp'];
            $gend = $_POST['loaisp'];
            $birtd = $_POST['soluong'];
            $sdt = $_POST['ttsp'];

            $sql = "update sanpham set TenSP = '$acc', GiaSP = '$passw', Ngaynhap = '$name', LoaiSP_ID = '$gend', SoLuong = '$birtd', thongtinsp = '$sdt' where masp=".$id;
            $conn->query($sql);
            $conn->close();
            header('Location:admin.php');
	
        }
    ?>


    <?php 
        if(isset($_GET['id'])){
            $id=$_GET['id'];
            $sql = "select * from sanpham where masp=".$id;
            $result = $conn->query($sql);
            $rowedit = $result->fetch_assoc();
            }
    ?>
<form action="" method="post" enctype="multipart/form-data">
    <table id="add">
        
        <tr><td>Tên sản phẩm :</td><td><input type="hidden" required name="masp" value="<?php echo $rowedit['MaSP'] ?>"/><input type="text" required name="tensp" value="<?php echo $rowedit['TenSP'] ?>"/></td></tr>
        <tr><td>Giá Sản Phẩm :</td><td><input type="number" required name="giasp" value="<?php echo $rowedit['GiaSP'] ?>"/></td></tr>
        <tr><td>Ngày Nhập :    </td><td><input type="date" id="datepicker" required value="<?php echo $rowedit['Ngaynhap'] ?>" name="ngaynhapsp"/></td></tr>
        <tr><td>Loại Sản Phẩm :</td><td><input type="text" required name="loaisp" value="<?php echo $rowedit['LoaiSP_ID'] ?>"/></td></tr>
        <tr><td>Số lượng :</td><td><input type="text" required name="soluong" value="<?php echo $rowedit['SoLuong'] ?>"/></td></tr>
        <tr><td>Thông tin sản phẩm :</td><td><textarea name="ttsp" style="width: 100%; height: 200px;"><?php echo $rowedit['thongtinsp'] ?></textarea></td></tr>
        <tr><td>              </td><td><input type="submit" name="submit" value="Update" style="padding:10px 20px;font-weight: bold;" /></td></tr>
        <tr><td></td><td></td></tr>
        <tr><td></td><td></td></tr>
    </table>
</form>