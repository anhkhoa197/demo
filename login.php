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
        <title>K-Shop-Login</title>
        <script>
            
        
        </script>
    </head>
    <body>
        
        <div id="container">
            <?php include "template/header.php" ?>
            <article id="main-container">
                
                
                <article id="product">
                    
                        
                        
                   
                    
                    <section id="Login">
                        <?php
                        if(isset($_SESSION['taikhoan'])){
                            echo 'Xin Chào '.$_SESSION['taikhoan'].' <a href="template/thoat.php">LogOut</a>';
                        }else{
                            
                            if(isset($_POST['login'])){
                                $tk=$_POST['taikhoan'];
                                $mk=$_POST['matkhau'];
                                
                                $sql1="select * from account where Usename='$tk' && Password='$mk'";
                                      $result1=$conn->query($sql1);                            
                                      $row1 = $result1->fetch_assoc();
                                      
                                    if($row1['Usename']!=$tk){
                                        //echo "Good";
                                        echo "Login Fail";
                                        //header("location:admin.php")
                                     
                                     }else {
                                         if($row1['ID']==1){
                                             header("location:login.php");
                                             $_SESSION['taikhoan']=$_POST['taikhoan'];
                                         }  else {
                                             header("location:login.php?id=".$row1['ID']);
                                             $_SESSION['taikhoan']=$_POST['taikhoan'];
                                         }
                                     }
                                  
                            }
                        ?>
                        
                        <form action="login.php" method="post">
                            <legend><h2>Đăng Nhập</h2></legend>
                            <table id="tblogin">
                                <tr><td class="td1">Tài Khoản :</td><td><input type="text" name="taikhoan" required /></td></tr>
                                <tr><td class="td1">Mật Khẩu :</td><td><input type="password" name="matkhau" required /></td></tr>
                                <tr><td></td><td><input type="submit" name="login"  value="Đăng Nhập"/></td></tr>
                            </table>
                              
                            
                        </form>
                        <?php } ?>
                        
                        
                        
                        
                    </section>
                        
                    
                </article>
            </article>
            <?php include "template/footer.php" ?>
            
            
        </div>
        
    </body>
</html>
 