<?php
	include_once('connecting.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php

		$names = mysqli_real_escape_string($conn, $_POST['names']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$arrival = mysqli_real_escape_string($conn, $_POST['arrival']);
		$departure = mysqli_real_escape_string($conn, $_POST['departure']);

		if(!empty($names) || !empty($email) || !empty($arrival) || !empty($departure)){

			if(mysqli_connect_error()){
				die('Connect Error('. mysqli_connect_error().')' .mysqli_connect_error() );
			}
			else {
				$SELECT = "SELECT Email From client Where Email = ?";
				$INSERT = "INSERT Into client (Name, Email, Arrival_Date, Departure_Date) Values (?, ?, ?, ?)";

				$stmt = $conn->prepare($SELECT);
				$stmt->bind_param("s", $email);
				$stmt->execute();
				$stmt->bind_result($email);
				$stmt->store_result();
				$rnum = $stmt->num_rows;

				if ($rnum==0){
					$stmt->close();

					$stmt = $conn->prepare($INSERT);
					$stmt->bind_param("ssss", $names, $email, $arrival, $departure);
					$stmt->execute();

					header('location:clientSignup.php?signup=successful');
					
				}
				else {
					header('location:clientSignup.php?signup=unsuccessful');
					exit();
				}
				$stmt->close();
				$conn->close();
			}

		}
		else {
			header('location:clientSignup.php?signup=empty');
			exit();
		}
	?>



</body>
</html>