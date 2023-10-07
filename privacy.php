 <?php include "header.php" ?>
 <!-- Privacy section -->
 <section>
     <?php
        // Sample content for the Privacy page with increased text
        $privacyContent = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vestibulum bibendum elit sit amet scelerisque. Suspendisse eu felis ut tortor dictum vulputate sit amet in sem. Maecenas in cursus orci.';
        $privacyContent .= ' Sed sagittis lectus quis purus lobortis convallis. Duis non lorem id metus rhoncus bibendum nec nec felis. Cras et tellus eget purus efficitur bibendum.';

        // Display the privacy content
        echo '<p>' . $privacyContent . '</p>';
        ?>
     <!-- Image from an online source -->
     <img src="https://example.com/images/privacy_image.jpg" alt="Privacy Image" />
 </section>

 <!-- Footer section -->
 <footer>
     <p>&copy; <?php echo date("Y"); ?> Your Website</p>
 </footer><?php include "footer.php" ?>