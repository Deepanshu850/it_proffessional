 <?php
 
    $servername = "localhost";
    $username = "training_deepanshu";
    $password = "y_r}}8{@oL{q";
    $dbname = "training_deepanshu_assessment_1";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    ?>