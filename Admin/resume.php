<?php
 
include 'include/header.php';
include 'include/sidebar.php';

?>


<form action="resume.php" method="post" id="update-form">
    <textarea name="editor1" id="textarea">
              <?php
              $sql = "SELECT id,description FROM `resume`";
              $result = mysqli_query($conn, $sql);
              $row = mysqli_fetch_assoc($result);
              echo $row['description'];
              // echo $row['id'];

              ?>  
            </textarea>
    <button type="submit" name="submit" class="btn btn-outline-info">CONFIRM</button>
</form>

<script>
CKEDITOR.replace('editor1');
</script>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  if (isset($_POST['submit'])) {
    // Update the record
    $textareaa = $_POST["editor1"];
    $sql = "UPDATE `resume` SET `description`='$textareaa' WHERE `id`= 1 ";
    $result = mysqli_query($conn, $sql);
    if ($result) {
      echo '<script>
                  alert("Record Updated Successfully")
                </script>';
    } else {
      echo "We could not update the record successfully";
    }
  }
}
?>

<?php
include 'include/footer.php';
?>