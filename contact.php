<?php include "Admin/connection.php";

// <!-- inclding header -->
include "header.php";



$sql = "SELECT * FROM header_settings";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$Title = $row['Title'];
$Address = $row['Address'];
$email = $row['email'];
$contact = $row['contact'];
?>

<main id="main">

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2><?php echo $Title; ?></h2>
                <p> Thank you for choosing W3 Care! We care about your experience and satisfaction. If you have any
                    questions or need assistance, feel free to reach out to us. We're here to help you!</p>
            </div>

            <div>

                <div class="mapouter">
                    <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=675&amp;height=420&amp;hl=en&amp;q=w3 care&amp;t=p&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://connectionsgame.org/">Connections Game</a></div>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: right;
                            width: 100%;
                            height: 420px;
                        }

                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            width: 100%;
                            height: 420px;
                        }

                        .gmap_iframe {
                            height: 420px !important;
                        }
                    </style>
                </div>
            </div>

            <div class="row mt-5">

                <!-- ...existing code... -->

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="bi bi-geo-alt"></i>
                            <h4>Location:</h4>
                            <p><?php echo $Address; ?></p>
                        </div>

                        <div class="email">
                            <i class="bi bi-envelope"></i>
                            <h4>Email:</h4>
                            <p><?php echo $email; ?></p>
                        </div>

                        <div class="phone">
                            <i class="bi bi-phone"></i>
                            <h4>Call:</h4>
                            <p><?php echo $contact; ?></p>
                        </div>
                    </div>
                </div>

                <!-- ...existing code... -->


                <div class="col-lg-8 mt-5 mt-lg-0">

                    <?php

                    use PHPMailer\PHPMailer\PHPMailer;
                    use PHPMailer\PHPMailer\Exception;

                    require 'PHPMailer/src/Exception.php';
                    require 'PHPMailer/src/PHPMailer.php';
                    require 'PHPMailer/src/SMTP.php';

                    // Define variables and set them to empty values
                    $name = $email = $message = '';
                    $nameErr = $emailErr = $messageErr = '';
                    $successMessage = '';

                    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                        // Validate name
                        if (empty($_POST['name'])) {
                            $nameErr = '**Name is required';
                        } else {
                            $name = test_input($_POST['name']);
                        }

                        // Validate email
                        if (empty($_POST['email'])) {
                            $emailErr = '**Email is required';
                        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                            $emailErr = 'Invalid email format';
                        } else {
                            $email = test_input($_POST['email']);
                        }

                        // Validate message
                        if (empty($_POST['message'])) {
                            $messageErr = '**Message is required';
                        } else {
                            $message = test_input($_POST['message']);
                        }

                        // If there are no errors, send the email
                        if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
                            $mail = new PHPMailer();
                            try {
                                $mail->isSMTP();
                                $mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server hostname
                                $mail->Port = 587;  // Replace with your SMTP server port
                                $mail->SMTPSecure = 'tls';
                                $mail->SMTPAuth = true;
                                $mail->Username =  'dipanshu23kumar@gmail.com';  // Replace with your Gmail address
                                $mail->Password =  'oxkgzguwrgnsrhgr';  // Replace with your Gmail password
                                $mail->setFrom($email, $name);
                                $mail->addAddress('dipanshu23kumar@gmail.com');  // Replace with your own email address
                                $mail->Subject = 'New Message from W3 care Website';
                                // Prepare the email body with HTML and CSS
                                $mail->Body = '<html>
 <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: Gray;
            margin: 0;
            padding: 0;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color:rgb(255, 255, 235);
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            color: rgb(255, 0, 0);
            font-size: 24px;
            margin-bottom: 20px;
        }
        
        p {
            color:Gray;
            font-size: 16px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>W3 Website</h1>
        <p><strong>Name --> </strong>  ' . $name . '</p>
        <p><strong>Email --> </strong>  ' . $email . '</p>
        <p><strong>Message --> </strong>  ' . nl2br($message) . '</p>
    </div>
</body>
</html>';

                                // Set the email content type as HTML
                                $mail->isHTML(true);


                                $mail->send();

                                $successMessage = 'Thank you for your message!';
                                $name = $email = $message = ''; // Reset the form fields
                            } catch (Exception $e) {
                                $errorMessage = 'Oops, something went wrong. Please try again later.';
                            }
                        }
                    }

                    // Function to sanitize input data
                    function test_input($data)
                    {
                        $data = trim($data);
                        $data = stripslashes($data);
                        $data = htmlspecialchars($data);
                        return $data;
                    }
                    ?>

                    <!-- <link rel="stylesheet" href="https://classless.de/classless.css"> -->

                    <style>
                        hr {
                            border: 1px solid red;
                        }
                    </style>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                        <div class="form-group">
                            <label for="name"><b> Name:</b></label>
                            <input type="text" class="form-control form-control-sm" name="name" value="<?php echo $name; ?>">
                            <span class="error"><?php echo $nameErr; ?></span><br><br>
                        </div>
                        <div class="form-group">
                            <label for="email"><b>Email:</b></label>
                            <input type="email" class="form-control form-control-sm" name="email" value="<?php echo $email; ?>">
                            <span class="error"><?php echo $emailErr; ?></span><br><br>
                        </div>
                        <div class="form-group">
                            <label for="message"><b>Message:</b></label>
                            <textarea name="message" class="form-control form-control-sm"><?php echo $message; ?></textarea>
                            <span class="error"><?php echo $messageErr; ?></span><br><br>
                        </div>
                        <input type="submit" class=" btn  rounded-pill btn-lg  btn-outline-info" name="submit" value="          Submit          ">
                    </form>

                    <?php
                    if (!empty($successMessage)) {
                        echo '<p style="color: green;">' . $successMessage . '</p>';
                    }

                    if (!empty($errorMessage)) {
                        echo '<p style="color: red;">' . $errorMessage . '</p>';
                    }
                    ?>



                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->
<!-- inclding header -->
<?php include "footer.php" ?>