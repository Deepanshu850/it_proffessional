<?php
include "include/header.php";
include "include/sidebar.php";
include('header_settings_add.php')
?>


<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="header_settings_index.php">Header setting</a>
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
                <div class="card-header">Create</div>
                <div class="card-body">
                    <form class="" action="header_settings_add.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control" name="image" value="">
                        </div>
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" class="form-control" name="Title" placeholder="Enter Name" value="">
                        </div>

                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter Email" value="">
                        </div>
                        <div class="form-group">
                            <label for="contact">contact</label>
                            <input type="text" class="form-control" name="contact" placeholder="Enter Mobile Number"
                                value="">
                        </div>
                        <div class="form-group">
                            <label for="contact">Address</label>
                            <input type="text" class="form-control" name="Address" placeholder="Enter  Address  "
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