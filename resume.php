<?php
include 'header.php';
require_once 'Admin/connection.php';
 
    $sql = "SELECT `description` FROM `resume`";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    echo ' <main id="main">' . ' <section id="resume" class="resume">
    ' . '<div style="text-align: center; class="container">' . $row['description'] . '</div>' . '</div>' . '</div>';
    
include 'footer.php';
