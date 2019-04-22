<?php
	include_once('connecting.php'); 
?>
<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php
		$name = mysqli_real_escape_string($conn, $_POST['name']);
		$price = mysqli_real_escape_string($conn, $_POST['price']);
		$category = mysqli_real_escape_string($conn, $_POST['category']);
		$quality = mysqli_real_escape_string($conn, $_POST['quality']);
		$maxdays = mysqli_real_escape_string($conn, $_POST['maxdays']);
		$description = mysqli_real_escape_string($conn, $_POST['description']);
		$image = mysqli_real_escape_string($conn, $_POST['image']);
		$email = $_SESSION['EMAIL'];
		
		//Insert values from a form
		$sql = "INSERT into `Product`(Name, Price, Category, Quality, maxNoOfdays, Product_description, Image, User_email_FK) VALUES ('$name','$price','$category','$quality', '$maxdays', '$description', 'Img/$image', '$email');";
		mysqli_query($conn, $sql);
		header("Location: shop_2.php?signup=success");



		// $name = mysqli_real_escape_string($conn, $_POST['name']);
		// $price = mysqli_real_escape_string($conn, $_POST['price']);
		// $category = mysqli_real_escape_string($conn, $_POST['category']);
		// $quality = mysqli_real_escape_string($conn, $_POST['quality']);
		// $maxdays = mysqli_real_escape_string($conn, $_POST['maxdays']);
		// $description = mysqli_real_escape_string($conn, $_POST['description']);
		// $image = mysqli_real_escape_string($conn, $_POST['image']);
		// $email = $_SESSION['EMAIL'];

		// if(!empty($name) || !empty($price) || !empty($category) || !empty($quality) || !empty($maxdays) || !empty($description) || !empty($image)){

		// 	if(mysqli_connect_error()){
		// 		die('Connect Error('. mysqli_connect_error().')' .mysqli_connect_error() );
		// 	}
		// 	else {
		// 		$SELECT = "SELECT User_email_FK From Product Where User_email_FK = ?";
		// 		$INSERT = "INSERT Into Product (Name, Price, Category, Quality, maxNoOfdays, Product_description, Image, User_email_FK) Values (?, ?, ?, ?, ?, ?, ?, ?)";

		// 		$stmt = $conn->prepare($SELECT);
		// 		$stmt->bind_param("i", $email);
		// 		$stmt->execute();
		// 		$stmt->bind_result($email);
		// 		$stmt->store_result();
		// 		$rnum = $stmt->num_rows;

		// 		if ($rnum==0){
		// 			$stmt->close();

		// 			$stmt = $conn->prepare($INSERT);
		// 			$stmt->bind_param("sississs", $name, $price, $category, $quality, $maxdays, $description, $image, $email);
		// 			$stmt->execute();
		// 			header('location:shop_2.php');
		// 		}
		// 		else {
		// 			header('location:shop_form.php');
		// 		}
		// 		$stmt->close();
		// 		$conn->close();
		// 	}

		// }
		// else {
		// 	header('location:shop_form.php?signup=empty');
		// 	die();
		// }
	?>

</body>
</html>