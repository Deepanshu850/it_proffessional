<?php
 

include "include/header.php";
include "include/sidebar.php";
$upload_dir = 'uploads/';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "select * from header_settings where id=" . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not Find Any Record';
  }
}

if (isset($_POST['Submit'])) {


  $imgName = $_FILES['image']['name'];
  $imgTmp = $_FILES['image']['tmp_name'];
  $imgSize = $_FILES['image']['size'];
  $Title = $_POST['Title'];

  $email = $_POST['email'];
  $contact = $_POST['contact'];
  $Address = $_POST['Address'];

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
    $sql = "update header_settings
									set image = '" . $userPic . "',
                  Title = '" . $Title . "',
                    email = '" . $email . "',
										contact = '" . $contact . "',
                    Address = '" . $Address . "'
                    


					where id=" . $id;
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $successMsg = 'New record updated successfully';
      echo '<script>window.location.href = "header_settings_index.php";</script>';
    } else {
      $errorMsg = 'Error ' . mysqli_error($conn);
    }
  }
}

?>



<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="header_settings_index.php"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-outline-danger" href="header_settings_index.php"><i
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
                            <label for="image">Choose Image</label>
                            <div class="col-md-4">
                                <img src="<?php echo $upload_dir . $row['image'] ?>" width="100">
                                <input type="file" class="form-control" name="image" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="Title" placeholder="Enter Title"
                                value="<?php echo $row['Title']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email"
                                value="<?php echo $row['email']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact">Contact No:</label>
                            <input type="text" class="form-control" name="contact" placeholder="Enter Mobile Number"
                                value="<?php echo $row['contact']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="Address">Address</label>
                            <input type="text" class="form-control" name="Address" placeholder="Enter Mobile Number"
                                value="<?php echo $row['Address']; ?>">
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

<?php include "include/footer.php"; ?>