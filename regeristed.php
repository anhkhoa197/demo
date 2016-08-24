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
        <title>K-Shop-Regeristed</title>
        <script>
            
        
        </script>
    </head>
    <body>
        
        <div id="container">
            <?php include "template/header.php" ?>
            <article id="main-container">
                
                
                <article id="product">
                    
                        
                        
                   
                    
                    <section id="register">
                        
                        
                        <form action="regeristed.php" method="post">
                            <legend><h2>Đăng Ký</h2></legend>
                            <table id="tbregister">
                                <tr><td class="td1">Tài Khoản :</td><td><input type="text" name="taikhoan" required /></td></tr>
                                <tr><td class="td1">Mật Khẩu :</td><td><input type="password" name="matkhau" required /></td></tr>
                                <tr><td class="td1">E-mail:</td><td><input type="email" name="email" required /></td></tr>
                                <tr><td class="td1">Địa Chỉ :</td><td><input type="text" name="diachi" required /></td></tr>
                                <tr><td class="td1">Sô Điện Thoại:</td><td><input type="tel" name="phone" required /></td></tr>
                                
                                <tr><td></td><td><input type="submit" name="register"  value="Đăng Ký"/></td></tr>
                            </table>
                              
                            
                        </form>
                       
                    </section>
                        
                    
                </article>
            </article>
            <?php include "template/footer.php" ?>
            
            
        </div>
        
    </body>
</html>
 
