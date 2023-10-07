<?php
include "include/header.php";
include "include/sidebar.php"; 
include('banner_add.php')
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
                <div class="card-header">Create</div>
                <div class="card-body">
                    <form class="" action="banner_add.php" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="name">Page_type</label>
                            <input type="text" class="form-control" name="Page_type" placeholder="Enter Page_type"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="Image">Choose Image</label>
                            <input type="file" class="form-control" name="Image" value="">
                        </div>
                        <div class="form-group">
                            <label for="Title">Title</label>
                            <input type="text" class="form-control" name="Title" placeholder="Enter Mobile Number"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="Description">Description</label>
                            <input type="text" class="form-control" name="Description" placeholder="Enter Description"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="Type">Type</label>
                            <input type="text" class="form-control" name="Type" placeholder="Enter Type" value="">
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