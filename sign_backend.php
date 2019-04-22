<?php
	require_once $_SERVER['DOCUMENT_ROOT'].'/A-la-Maison-s-website-kevin/connecting.php'; 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$address = mysqli_real_escape_string($conn, $_POST['address']);

		if(!empty($username) || !empty($email) || !empty($password) || !empty($address)){

			if(mysqli_connect_error()){
				die('Connect Error('. mysqli_connect_error().')' .mysqli_connect_error() );
			}
			else {
				$SELECT = "SELECT Email From Users Where Email = ?";
				$INSERT = "INSERT Into Users (Username, Email, Password, Address) Values (?, ?, ?, ?)";

				$stmt = $conn->prepare($SELECT);
				$stmt->bind_param("s", $email);
				$stmt->execute();
				$stmt->bind_result($email);
				$stmt->store_result();
				$rnum = $stmt->num_rows;

				if ($rnum==0){
					$stmt->close();

					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("ssss", $username, $email, $password, $address);
					$stmt->execute();
					session_start();
					$_SESSION['EMAIL']= $email;
					header('location:shop_form.php');
				}
				else {
					header('location:sign_up.php');
				}
				$stmt->close();
				$conn->close();
			}

		}
		else {
			header('location:sign_up.php?signup=empty');
			die();
		}
	?>

</body>
</html>