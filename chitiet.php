<?php include "database.php"; ?>
 
<?php 
$id = $_GET["id"];
$result = mysql_query("select * from sanpham where MaSP = ".$id, $connect);
$row = mysql_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/product.css" rel="stylesheet" type="text/css"/>
        <title>K-Shop</title>
        <script>
            
        
        </script>
    </head>
    <body>
        
        <div id="container">
            <?php include "template/header.php" ?>
            <article id="main-container">
                
                
                <article id="product">
                   <?php include "template/left.php" ?>
                   <section id="view-product">
                       <div style="float: left">
                           <img style="width: 300px;height: 300px;" src="images/product/<?php echo $row["Image"] ?>" alt=""/>
                       </div>
                       <div style="float: left; margin-left: 40px; margin-top: 40px;">
                           <h1 style="color: red;"><?php echo $row["TenSP"] ?></h1><br>
                           <p>Giá:<?php echo number_format($row["GiaSP"]) ?></p><br>
                           
                           <button style="margin-top: 50px; padding: 5px; border-radius: 5px;" type="button" class="btn addcart-btn" title="Thêm vào giỏ hàng" data-toggle="modal" data-target="#modalAddtocart">  Thêm vào giỏ hàng     </button>
                           <button style="margin-top: 50px; padding: 5px; border-radius: 5px;" type="button" class="btn addcart-btn" title="Mua hàng" data-toggle="modal" data-target="#modalAddtocart">  Mua Hàng     </button>
                       </div>
                       <div style="width: 100%; height: auto;float:left; margin-top: 30px;">
                           <h1 style="font-weight: bold;">Chi Tiết Sản Phẩm:</h1><br>
                           <?php echo $row["thongtinsp"] ?>
                                                     
                       </div>
                   </section>
                </article>
            </article>
            <?php include "template/footer.php" ?>
            
            
        </div>
        
    </body>
</html>
 