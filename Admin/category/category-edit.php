<?php
require_once('../connection.php');
$name= $_POST['name' ];
// $email= $_POST['email' ];
$description= $_POST['description' ];
// $phone= $_POST['phone' ];
$id= $_POST['category_id' ];
$sql= "UPDATE `category`  SET  `name` = '". $name."'  , 
`description`  =  '".$description ."' WHERE `id` = $id " ;

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
