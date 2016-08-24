<?php 
    include "database.php";
    if(isset($_GET['id'])){
        $id=$_GET['id'];

        $sql = "delete from sanpham where masp=".$id;
        $conn->query($sql);
        header("location:admin.php");
        $conn->close();
        }
?>