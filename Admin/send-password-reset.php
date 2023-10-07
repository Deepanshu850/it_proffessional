<?php

$email = $_POST["email"];

$token = bin2hex(random_bytes(16));

$token_hash = hash("sha256", $token);

$expiry = date("Y-m-d H:i:s", time() + 60 * 5);

$mysqli = require __DIR__ . "/database.php";

$sql = "UPDATE users
        SET reset_token_hash = ?,
            reset_token_expires_at = ?
        WHERE email = ?";

$stmt = $mysqli->prepare($sql);

$stmt->bind_param("sss", $token_hash, $expiry, $email);

$stmt->execute();

if ($mysqli->affected_rows) {

    $mail = require __DIR__ . "/mailer.php";

    $mail->setFrom("noreply@example.com");
    $mail->addAddress($email);
    $mail->Subject = "Password Reset";
    $mail->Body = <<<END

    <html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: rgb(255, 255, 223);
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: rgb(255, 0, 106);
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            color: #808080;
            font-size: 16px;
            margin-bottom: 10px;
        }

        .reset-link {
            display: inline-block;
            padding: 10px 20px;
            background-color:DodgerBlue;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .reset-link:hover {
            background-color: rgb(0, 0, 255);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Password Reset(Admin)</h1>
        <p>Click the link below to reset your password:</p>
        <a class="reset-link" href="https://training.host4india.in/deepanshu_assessment_1/Admin/reset-password.php?token=$token">Reset password</a> 
</div>
</body>

</html>


END;

    try {

        $mail->send();
    } catch (Exception $e) {

        echo "Message could not be sent. Mailer error: {$mail->ErrorInfo}";
    }
}

echo '<script>
window.location.href = "pages/examples/login-v2.php";
alert("Reset password link send sucessfully to your gmail account valid for 5 minutes");
</script>';