<!-- including connection file -->
<?php
  
include "include/header.php";
include "include/sidebar.php";

$upload_dir = 'uploads/';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "select * from project where id=" . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not Find Any Record';
  }
}

if (isset($_POST['Submit'])) {
  $name = $_POST['name'];
  $description   = $_POST['description'];
  $category_id = $_POST['category_id'];
  $client_id = $_POST['client_id'];
  $hour = $_POST['hour'];


  $imgName = $_FILES['image']['name'];
  $imgTmp = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image']['size'];

  if ($imgName) {

    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

    $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

    if (in_array($imgExt, $allowExt)) {

      if ($imgSize < 5000000) {
        unlink($upload_dir . $row['image']);
        move_uploaded_file($imgTmp, $upload_dir . $userPic);
      } else {
        $errorMsg = 'Image too large';
      }
    } else {
      $errorMsg = 'Please select a valid image';
    }
  } else {

    $userPic = $row['image'];
  }

  if (!isset($errorMsg)) {
    $sql = "update project
									set name = '" . $name . "',
                  description	 = '" . $description . "',
                  category_id = '" . $category_id . "',
                  client_id = '" . $client_id . "',
                  hour = '" . $hour . "',


										image = '" . $userPic . "'
					where id=" . $id;
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $successMsg = 'New record updated successfully';
      echo '<script>window.location.href = "project_index.php";</script>';
    } else {
      $errorMsg = 'Error ' . mysqli_error($conn);
    }
  }
}

?>



<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="project_index.php">Project table</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-outline-danger" href="project_index.php"><i
                            class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Edit Profile
                </div>
                <div class="card-body">
                    <form class="" action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                value="<?php echo $row['name']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="description	">description</label>
                            <input type="text" class="form-control" name="description" placeholder="Enter description	"
                                value="<?php echo $row['description']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="category_id">category_id</label>
                            <input type="text" class="form-control" name="category_id" placeholder="Enter  category_id"
                                value="<?php echo $row['category_id']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="client_id">client_id </label>
                            <input type="text" class="form-control" name="client_id" placeholder="Enter Email"
                                value="<?php echo $row['client_id']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="hour">hour</label>
                            <input type="text" class="form-control" name="hour" placeholder="Enter  hour"
                                value="<?php echo $row['hour']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <div class="col-md-4">
                                <img src="<?php echo $upload_dir . $row['image'] ?>" width="100">
                                <input type="file" class="form-control" name="image" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="Submit" class="btn btn-primary waves">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include "include/footer.php";