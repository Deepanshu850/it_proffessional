<?php
 

include "include/header.php";
include "include/sidebar.php";
$upload_dir = 'uploads/';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT Page_type, Image, Title, Description, Type FROM banner WHERE id = " . $id;

  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
  } else {
    $errorMsg = 'Could not Find Any Record';
  }
}

if (isset($_POST['Submit'])) {
  $Page_type = $_POST['Page_type'];


  $imgName = $_FILES['Image']['name'];
  $imgTmp = $_FILES['Image']['tmp_name'];
  $imgSize = $_FILES['Image']['size'];
  $Title = $_POST['Title'];
  $Description = $_POST['Description'];
  $Type = $_POST['Type'];


  if ($imgName) {

    $imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

    $allowExt  = array('jpeg', 'jpg', 'png', 'gif');

    $userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

    if (in_array($imgExt, $allowExt)) {

      if ($imgSize < 5000000) {
        unlink($upload_dir . $row['Image']);
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
    $sql = "update banner
									set Page_type = '" . $Page_type . "',
									
										Image = '" . $userPic . "',
                    Title = '" . $Title . "',
                    Description = '" . $Description . "',
                    Type = '" . $Type . "'

					where id=" . $id;
    $result = mysqli_query($conn, $sql);
    if ($result) {
      $successMsg = 'New record updated successfully';
      echo '<script>window.location.href = "banner_index.php";</script>';
    } else {
      $errorMsg = 'Error ' . mysqli_error($conn);
    }
  }
}

?>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="banner_index.php"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-outline-danger" href="banner_index.php"><i
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
                            <label for="name">Page_type</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                value="<?php echo $row['Page_type']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="contact">Title</label>
                            <input type="text" class="form-control" name="Title" placeholder="Enter Title"
                                value="<?php echo $row['Title']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Description</label>
                            <input type="text" class="form-control" name="Description" placeholder="Enter Description"
                                value="<?php echo $row['Description']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Type</label>
                            <input type="text" class="form-control" name="Type" placeholder="Enter Description"
                                value="<?php echo $row['Type']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <div class="col-md-4">
                                <img src="<?php echo $upload_dir . $row['Image'] ?>" width="100">
                                <input type="file" class="form-control" name="Image" value="">
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

<?php include "include/footer.php"; ?>