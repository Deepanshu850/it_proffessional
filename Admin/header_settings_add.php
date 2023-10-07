<?php
require_once('connection.php');
$upload_dir = 'uploads/';

if (isset($_POST['Submit'])) {


	$imgName = $_FILES['image']['name'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgSize = $_FILES['image']['size'];
	$Title = $_POST['Title'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$Address = $_POST['Address'];
	if (empty($Title)) {
		$errorMsg = 'Please Title name';
	} else {

		$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

		$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

		$userPic = time() . '_' . rand(1000, 9999) . '.' . $imgExt;

		if (in_array($imgExt, $allowExt)) {

			if ($imgSize < 5000000) {
				move_uploaded_file($imgTmp, $upload_dir . $userPic);
			} else {
				$errorMsg = 'Image too large';
			}
		} else {
			$errorMsg = 'Please select a valid image';
		}
	}


	if (!isset($errorMsg)) {
		$sql = "insert into header_settings(image,Title,email,contact,Address)
					values( '" . $userPic . "', '" . $Title . "', '" . $email . "', '" . $contact . "', '" . $Address . "' )";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$successMsg = 'New record added successfully';
			header('Location: header_settings_index.php');
		} else {
			$errorMsg = 'Error ' . mysqli_error($conn);
		}
	}
}
