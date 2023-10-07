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
?>


<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="header_settings_header_settings_index.php"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>

        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header">
                Contact Details
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md">
                        <img src="<?php echo $upload_dir . $row['image'] ?>" height="200">
                    </div>
                    <div class="col-md">
                        <h5 class="form-control"><i class="fa fa-user-tag">
                                <span><?php echo $row['Title'] ?></span>
                            </i></h5>

                        <h5 class="form-control"><i class="fa fa-envelope">
                                <span><?php echo $row['email'] ?></span>
                            </i></h5>
                        <h5 class="form-control"><i class="fa fa-mobile-alt">
                                <span><?php echo $row['contact'] ?></span>
                            </i></h5>
                        <h5 class="form-control"><i class="fa fa-mobile-alt">
                                <span><?php echo $row['Address'] ?></span>
                            </i></h5>

                        <a class="btn btn-outline-danger" href="header_settings_header_settings_index.php"><i
                                class="fa fa-sign-out-alt"></i><span>Back</span></a>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<script type="text/javascript">
$(document).ready(function() {
    $('#example').DataTable();
});
</script>
<?php include "include/footer.php"; ?>