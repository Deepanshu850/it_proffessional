<?php
include "include/header.php";
include "include/sidebar.php";  
include('social_media_settings_add.php')
?>


<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="social_media_settings_index.php"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a class="btn btn-outline-danger" href="social_media_settings_index.php"><i
                            class="fa fa-sign-out-alt"></i></a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Create</div>
                <div class="card-body">
                    <form class="" action="social_media_settings_add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Name" value="">
                        </div>
                        <div class="form-group">
                            <label for="contact">Url</label>
                            <input type="text" class="form-control" name="Url" placeholder="Enter   url" value="">
                        </div>
                        <!-- <div class="form-group">
                      <label for="email">E-Mail</label>
                      <input type="email" class="form-control" name="email" placeholder="Enter Email" value="">
                    </div> -->
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control" name="image" value="">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" class="form-control" name="Description" placeholder="Enter  Description"
                                value="">
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

</body>

</html>