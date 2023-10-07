<?php
 

include "include/header.php";
include "include/sidebar.php";
$upload_dir = 'uploads/';

if (isset($_GET['delete'])) {
  $id = $_GET['delete'];
  $sql = "select * from social_media_settings where id = " . $id;
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
    unlink($upload_dir . $image);
    $sql = "delete from social_media_settings where id=" . $id;
    if (mysqli_query($conn, $sql)) {
      echo '<script>window.location.href = "social_media_settings_index.php";</script>';
    }
  }
}
?>


<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="social_media_settings_index.php">Social media</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-primary" href="social_media_settings_create.php"><i
                            class="fa fa-user-plus"></i></a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">links</div>
                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <!-- <th>Image</th> -->
                                <th>Name</th>
                                <th>Url</th>
                                <th>Icon</th>
                                <th>Description</th>

                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>

                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
              $sql = "select * from social_media_settings";
              $result = mysqli_query($conn, $sql);
              if (mysqli_num_rows($result)) {
                while ($row = mysqli_fetch_assoc($result)) {
              ?>
                            <tr>
                                <td><?php echo $row['id'] ?></td>

                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['Url'] ?></td>
                                <td><img src="<?php echo $upload_dir . $row['image'] ?>" height="40"></td>
                                <td><?php echo $row['Description'] ?></td>
                                <td class="text-center">
                                    <a href="show.php?id=<?php echo $row['id'] ?>" class="btn btn-success"><i
                                            class="fa fa-eye"></i></a>
                                    <a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i
                                            class="fa fa-user-edit"></i></a>
                                    <a href="social_media_settings_index.php?delete=<?php echo $row['id'] ?>"
                                        class="btn btn-danger"
                                        onclick="return confirm('Are you sure to delete this record?')"><i
                                            class="fa fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            <?php
                }
              }
              ?>
                        </tbody>
                    </table>
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