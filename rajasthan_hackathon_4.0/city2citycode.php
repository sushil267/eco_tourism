<?php
include_once('config.php');
$city_name=$_REQUEST['city_name'];

$link=mysqli_connect(HOST,USER,PASSWORD,DATABASE);
     $select="select city_code from goibibo_city where city_name Like '$city_name%'";
    
     $query=mysqli_query($link,$select);
     $city_code=mysqli_fetch_array($query);
    
   echo $city_code[0];

?>