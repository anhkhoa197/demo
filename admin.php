<?php include "database.php"; ?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/product.css" rel="stylesheet" type="text/css"/>
        <link href="css/admin.css" rel="stylesheet" type="text/css"/>
        <title>K-Shop</title>
       <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
       <script type="text/javascript" src="js/date.js"></script>
    <script type="text/javascript" src="js/jquery.ui.core.js"></script>
    <script type="text/javascript" src="js/jquery.ui.widget.js"></script>
    <script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.4.css"/>
<link rel="stylesheet" type="text/css" href="css/jquery-ui-1.10.4.min.css"/>
    <script>
       /* var Browser = navigator.userAgent;
        if(Browser.indexOf('Firefox') >= 0){
    Browser = 'Firefox';
   }
        $(function() {
} //navigator.appName == "Firefox"; 
        //if(Browser = 'Firefox';){  alert ('zzzz');
            }else {
       // $( "#datepicker" ).datepicker();
        alert ('zzzz111');
    };
 });*/
  

	
	</script>
    </head>
    <body>
        
        <div id="container">
             <?php include("template/header.php") ?>
            <article id="main-container">
                 
                
                <article id="product">
                         <?php
                         
                            if(isset($_POST['addsp']))
                        {
                      
                            if (($_FILES['img']['type'] != "image/gif") && ($_FILES['img']['type'] != "") && ($_FILES['img']['type'] != "image/jpeg")&& ($_FILES['img']['type'] != "image/pjpeg")&& ($_FILES['img']['type'] != "image/png")){
                                echo "Ảnh Không Đúng Định Dạng ";
                            }else if($_FILES['img']['size'] > 5000000)
                                        {
                                          echo "Ảnh Quá Lớn !Ảnh Không Quá 5MB ";  
                                }else{
                                $masp=$_POST['masp'];
                                 $tensp=$_POST['tensp'];
                                 $giasp=$_POST['giasp'];
                                 $ngaynhapsp=$_POST['ngaynhapsp'];
                                 $loaisp=$_POST['loaisp'];
                                 $soluong=$_POST['soluong'];
                                 $img=$_FILES['img']['name'];
                                 echo $img;
                                  move_uploaded_file($_FILES['img']['tmp_name'],"images/product/".$img);
                                 $ttsp=$_POST['ttsp'];
                                 $sql2= " insert into sanpham(MaSP, TenSP, GiaSP, Ngaynhap, LoaiSP_ID, Image, SoLuong, thongtinsp) values ('$masp','$tensp','$giasp','$ngaynhapsp','$loaisp','$img', $soluong, '$ttsp')";
                                    $conn->query($sql2);
                                         
                                $conn->close();
                            }   
                        }
                         ?>
                    
                        <section id="admin1">
                        <h1>Thêm Bài Viết</h1>
                        <form action="admin.php" method="post" enctype="multipart/form-data">
                            <table id="add">
                                <tr><td>Ma sản phẩm :</td><td><input type="text" required name="masp"/></td></tr>
                                <tr><td>Tên sản phẩm :</td><td><input type="text" required name="tensp"/></td></tr>
                                <tr><td>Giá Sản Phẩm :</td><td><input type="number" required name="giasp"/></td></tr>
                                <tr><td>Ngày Nhập :    </td><td><input type="date" id="datepicker" required name="ngaynhapsp"/></td></tr>
                                <tr><td>Loại Sản Phẩm :</td><td><input type="text" required name="loaisp"/></td></tr>
                                <tr><td>Số lượng :</td><td><input type="text" required name="soluong"/></td></tr>
                                <tr><td>Ảnh :         </td><td><input type="file"  name="img" size="45" /></td></tr>
                                <tr><td>Thông tin sản phẩm :</td><td><textarea name="ttsp" style="width: 100%; height: 200px;" ></textarea></td></tr>
                                <tr><td>              </td><td><input type="submit" value="Thêm" name="addsp"/></td></tr>
                                <tr><td></td><td></td></tr>
                                <tr><td></td><td></td></tr>
                            </table>
                        </form>
                        
                    </section>
                    <section id="admin2">
                        <h1>Sửa & Xóa bài Viết</h1>
                        <table>
                            <tr>
                                <td>STT</td>
                                <td>Mã Sản Phẩm</td>
                                <td>Tên Sản Phẩm</td>
                                <td>Giá</td>
                                <td>Ngày Nhập</td>
                                <td>Ảnh</td>
                                <td>Loại</td>
                                <td>Số Lượng</td>
                                <td>Thông Tin</td>
                                <td>Sửa</td>
                                <td>Xóa</td>
                            </tr>
                            
                            <?php 
                            $stt = 1;
                            $results = $conn->query("SELECT MaSP, TenSP, GiaSP, Ngaynhap, Image, LoaiSP_ID, SoLuong, thongtinsp FROM sanpham ORDER BY masp ASC");
                            if($results){ 
                            $products_item = '';
                            //fetch results set as object and output HTML
                            foreach($results as $htproducts)
                            {
                             ?>
                            <tr>
                                <td><?php echo $stt; ?></td>
                                <td><?php echo $htproducts['MaSP']?></td>
                                <td><?php echo $htproducts['TenSP']?></td>
                                <td><?php echo $htproducts['GiaSP']?></td>
                                <td><?php echo $htproducts['Ngaynhap']?></td>
                                <td><img style="width: 50px" src="images/product/<?php echo $htproducts['Image']?>" alt=""/></td>
                                <td><?php echo $htproducts['LoaiSP_ID']?></td>
                                <td><?php echo $htproducts['SoLuong']?></td>
                                <td style="width: 200px;"><?php echo $htproducts['thongtinsp']?></td>
                                <td><a href="sua.php?id=<?php echo $htproducts['MaSP']?>">Sửa</a></td>
                                <td><a href="xoa.php?id=<?php echo $htproducts['MaSP']?>">Xóa</a></td>
                            </tr>
                        <?php
                        $stt++;
                        }
                        
                        $products_item .= '';
                        echo $products_item;
                        }
                        ?> 
                                                </table>

                    </section>
                    <section id="admin3">
                        <h1>Quản Trị Website</h1>
                        <ul>
                            <li><a href="">Quản Lý Tài Khoản </a></li>
                            <li><a href="">Thông Tin Hàng Hóa</a></li>
                            <li><a href="">Thông Tin Khách Hàng</a></li>
                            <li><a href="">Đơn Hàng</a></li>
                            <li><a href=""></a></li>
                            
                        </ul>
                        
                    </section>
                        
                    
                </article>
            </article>
            <?php include "template/footer.php" ?>
            
            
        </div>
        
    </body>
</html>
 

