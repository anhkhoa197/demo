<?php include "database.php"; ?>
 
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
                        <h1>Phụ Kiện Công Nghệ</h1>
                            <?php
                            $sql="select * from sanpham";
                            $result=$conn->query($sql);
                            for($i=0;$i<=8;$i++){
                            $row[$i]=$result->fetch_assoc();
                            }
                            $j=0;
                            for($j=0;$j<=($i-1);$j++){
                                  
                           
                             ?>
                        <section class="product1">
                            <section class="img"><?php echo '<img src="images/product/'.$row["$j"]['Image'].'"/>' ?> </section>
                            <section class="namepd"><?php echo $row["$j"]['TenSP'];   ?></section>
                            
                            <section class="cost"><?php echo  number_format($row["$j"]['GiaSP']);  ?></section>
                            <section class="cart"><a href="chitiet.php?id=<?php echo $row["$j"]["MaSP"] ?>">Xem</a></section>
                            
                            
                            
                        </section>
                            <?php } ?>
                    </section>
                        
                    
                </article>
            </article>
            <?php include "template/footer.php" ?>
            
            
        </div>
        
    </body>
</html>
 