<!-- sweet alert cdn -->
<?php
// including connection file
require_once('connection.php');

?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<?php




// Retrieve form data
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  // Prepare SQL statement
  $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";

  // Execute the query
  $result = $conn->query($sql);
  $row = mysqli_fetch_assoc($result);

  // Check if the query returned any rows
  if ($row) {
    // managing session
    
    // Login successful
    $_SESSION['user_id'] = $row['id']; // Store user ID in the session
    $_SESSION['user_name'] = $row['name']; // Store user name in the session
?>
<!-- sweet alert perform -->
<script>
window.addEventListener('load', function() {
    swal({
        title: "Welcome <?php echo $_SESSION['user_name'] ?>",
        text: "W3 care",
        icon: "success",
        button: "OK"
    }).then(function() {
        window.location.href = "dashboard.php";
    });
});
</script>
<?php
    // Replace with the actual URL of your dashboard page
    //  header("Location: dashboard.php");
    exit();
  } else {
    // Login failed
  ?>
<script>
alert('Invalid Email & Password');
window.location.href = "pages/examples/login-v2.php";
</script>
<?php
  }
}

// Close the database connection
$conn->close();
?>