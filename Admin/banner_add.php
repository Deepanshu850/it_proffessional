<?php
//connection file
require_once('connection.php');
$upload_dir = 'uploads/';
// checking wheather the data is sucessfully send or not
if (isset($_POST['Submit'])) {
	$Page_type = $_POST['Page_type'];


	$imgName = $_FILES['Image']['name'];
	$imgTmp = $_FILES['Image']['tmp_name'];
	$imgSize = $_FILES['Image']['size'];
	$Title = $_POST['Title'];
	$Description = $_POST['Description'];
	$Type = $_POST['Type'];

	if (empty($Page_type)) {
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
		$sql = "insert into banner(Page_type, Image, Title, Description,Type)
					values('" . $Page_type . "','" . $userPic . "', '" . $Title . "', '" . $Description . "', '" . $Type . "' )";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			$successMsg = 'New record added successfully';
			echo '<script>window.location.href = "banner_index.php";</script>';
		} else {
			$errorMsg = 'Error ' . mysqli_error($conn);
		}
	}
}