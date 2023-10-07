<?php
require_once('connection.php');
$upload_dir = 'uploads/';

if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$contact = $_POST['Url'];


	$imgName = $_FILES['image']['name'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgSize = $_FILES['image']['size'];
	$Description = $_POST['Description'];

	if (empty($name)) {
		$errorMsg = 'Please input name';
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
		$sql = "insert into social_media_settings(name,Url,image,Description)
					values('" . $name . "', '" . $Url . "','" . $userPic . "','" . $Description . "')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$successMsg = 'New record added successfully';
			header('Location: social_media_settings_index.php');
		} else {
			$errorMsg = 'Error ' . mysqli_error($conn);
		}
	}
}