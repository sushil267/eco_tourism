<?php
include_once('config.php');
$city_name=$_REQUEST['city_name'];

$link=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
     $select="SELECT `airport_code`FROM `goibibo_Iota_Code` WHERE airport_name LIKE '%$city_name%'";
   
     $query=mysqli_query($link,$select);
     $iota_code=mysqli_fetch_array($query);
    
   echo $iota_code[0];

?>