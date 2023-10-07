<?php
require_once 'Admin/connection.php';
include 'header.php';

?>

<main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <d class="container" data-aos="fade-up">

            <div class="section-title">
                <?php
                $sql = "SELECT * FROM `project`";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
                echo '<h2> ' . $row['name'] . ' </h2>';

                ?>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12 d-flex justify-content-center">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">GALLERY</li>
                    </ul>
                </div>
            </div>
            <?php
            $sql = "SELECT  * FROM `project`";
            $result = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-5 portfolio-item filter-app">
                    <div class="portfolio-wrap">
                    <img src="Admin/uploads/' . $row['image'] . '" alt="" height="300px" width="500px">
                        <div class="portfolio-info">
                            
                            <h4>' . $row["description"] . '</h4>
                            <p>' . $row["name"] . '</p>
                            <div class="portfolio-links">
                                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                                    class="portfolio-lightbox" title=""> </a>
                               
                            </div>
                        </div>
                    </div>
                </div>';
            }

            ?>

            </div>

            </div>
    </section><!-- End Portfolio Section -->

</main><!-- End #main -->

<?php
include 'footer.php';
?>