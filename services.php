<?php
require_once 'Admin/connection.php';
include 'header.php';
 

 
$sql = "SELECT `description` FROM `services`";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
echo ' <main id="main">' . ' <section id="services" class="services">
    ' . '<div style="text-align: center; class="container">' . $row['description'] . '</div>' . '</div>' . '</div>';
 

 
include 'footer.php';
