<?php
    $servername= "localhost";
    $usename= "root";
    $password = "";
    $db= "qlbh";
    
    $connect = mysql_connect("localhost", "root", "") or die ("server not found");
    $conn=new mysqli($servername,$usename,$password,$db);
    mysql_select_db("qlbh", $connect)or die ("data not found");
    mysqli_set_charset($conn, 'utf8');
    mysql_query("SET NAMES utf8");
    
    
    
    
    
?>

