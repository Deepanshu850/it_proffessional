<!-- <link rel="stylesheet" href="assets/css/style.css"> -->
<?php require_once 'Admin/connection.php';?>
<!-- inclding header -->
<?php include "header.php" ?>
<?php
$sql = "SELECT * FROM banner";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$Image = $row['Image'];
$Title = $row['Title'];
$Description = $row['Description'];
?>
<style>
#hero {
    width: 100%;
    height: 100vh;
    background: url(<?php echo 'Admin/uploads/' . $row['Image']; ?>) top right;
    background-size: cover;
}
</style>

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">
    <div class="container d-flex flex-column align-items-center" data-aos="zoom-in" data-aos-delay="100">
        <h1><?php echo $Title; ?></h1>
        <h2><?php echo $Description; ?></h2>
        <a href="about.php" class="btn-about">About Me</a>
    </div>
</section><!-- End Hero -->

<!-- ======= Footer ======= -->
<?php include "footer.php" ?>