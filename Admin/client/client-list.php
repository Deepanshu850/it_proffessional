 <?php
    require_once('../connection.php');
    $sql = "SELECT * FROM `client`";
    $result = mysqli_query($conn, $sql);
    $data = [];
    while ($fetch = mysqli_fetch_assoc($result)) {
        $data[] = $fetch;
    }
    echo json_encode($data);
    ?>