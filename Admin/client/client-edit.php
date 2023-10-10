<?php
require_once('../connection.php');
$name= $_POST['name' ];
 
$address= $_POST['address' ];
$phone= $_POST['phone' ];
$id= $_POST['client_id' ];
$sql= "UPDATE `client`  SET  `name` = '". $name."'  , 
`address`  =  '".$address ."' , `phone`  ='".$phone ."' WHERE `id` = $id " ;

if(mysqli_query($conn , $sql)){
    $response = [
        'status'=>'ok',
        'success'=>true,
        'message'=>'Record updated succesfully!'
    ];
    print_r(json_encode($response));
}else{
    $response = [
        'status'=>'ok',
        'success'=>false,
        'message'=>'Record updated failed!'
    ];
    print_r(json_encode($response));
}