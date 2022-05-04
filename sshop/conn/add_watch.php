<?php
//$_POST['product_id']e
$ip = $_SERVER["REMOTE_ADDR"];
include_once 'config.php';
$product_id = $_POST['product_id'];

$sql = "SELECT *  FROM user u WHERE u.ip_address = '$ip'";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);


if($count> 0){
 
    $sql = "INSERT INTO `watch_list`(`product_id`, `user_id`) VALUES ('$product_id', (SELECT user_id FROM user u WHERE u.ip_address = '$ip'))";

    $result = mysqli_query($conn, $sql);  

    echo 'Added';
    
}else{
    
   
$sql = "INSERT INTO `user` (`ip_address`) VALUES ('$ip')";
    
$result = mysqli_query($conn, $sql);
   

$sql = "INSERT INTO `watch_list`(`product_id`, `user_id`) VALUES ('$product_id', (SELECT user_id FROM user u WHERE u.ip_address = '$ip'))";

$result = mysqli_query($conn, $sql);  

echo 'Added';
    
}
