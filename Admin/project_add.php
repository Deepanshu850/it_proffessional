<!-- INCLUDING CONNECTION FILE -->
<?php
require_once('connection.php');
$upload_dir = 'uploads/';

if (isset($_POST['Submit'])) {
	$name = $_POST['name'];
	$description = $_POST['description'];
	$category_id = $_POST['category_id'];
	$client_id = $_POST['client_id'];
	$hour = $_POST['hour'];

	$imgName = $_FILES['image']['name'];
	$imgTmp = $_FILES['image']['tmp_name'];
	$imgSize = $_FILES['image']['size'];

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
		// Performing sql querie
		$sql = "insert into project(name, description, category_id, client_id,hour, image)
					values('" . $name . "', '" . $description	. "', '" . $category_id . "', '" . $client_id . "','" . $hour . "', '" . $userPic . "')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			// $successMsg = 'New record added successfully';
			header('Location: project_index.php');
		} else {
			$errorMsg = 'Error ' . mysqli_error($conn);
		}
	}
}
?>