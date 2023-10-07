<?php
require_once('../connection.php'); 
$name =  $_POST['name' ]; 
// $email =  $_POST['email' ]; 
$address =  $_POST['address' ]; 
$phone =  $_POST['phone' ]; 
$sql=  "INSERT  INTO `client`(`name` ,  `address` , `phone`)
 VALUE  (' {$name} '  , ' {$address } ' , ' {$phone } ')" ; 

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record created succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record created failed!'
    ];
    print_r(json_encode($response));
}