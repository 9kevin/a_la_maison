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

		$client = mysqli_real_escape_string($conn, $_POST['client']) ;
		$trainer = mysqli_real_escape_string($conn, $_POST['trainer']);
		$date = mysqli_real_escape_string($conn, $_POST['date']);
		

		if(!empty($client) || !empty($trainer) || !empty($date)){
			
			if(mysqli_connect_error()){
				die('Connect Error('. mysqli_connect_error().')' .mysqli_connect_error() );
			}
			elseif ($_POST) {

					$query = "SELECT * From Gym Where Trainer_ID = '$trainer'";
					$query2 ="SELECT * From Client where Client_ID = '$client'";
					$result = mysqli_query($conn, $query);
					$result2 = mysqli_query($conn, $query2);
					if(mysqli_num_rows($result)==1 and mysqli_num_rows($result2)==1){
						session_start();
						$_SESSION['auth']='true';
						$SELECT = "SELECT Client_ID_FK From Book_Gym Where Client_ID_FK = ?";
						$INSERT = "INSERT Into Book_Gym (Client_ID_FK, Trainer_ID_FK, Date) Values (?, ?, ?)";

						$stmt = $conn->prepare($SELECT);
						$stmt->bind_param("i", $client);
						$stmt->execute();
						$stmt->bind_result($client);
						$stmt->store_result();
						$rnum = $stmt->num_rows;

						if ($rnum==0){
							$stmt->close();

							$stmt = $conn->prepare($INSERT);
							$stmt->bind_param("iis", $client, $trainer, $date);
							$stmt->execute();
							
							header('location:index.php?signup=successful');
							exit();
							// header('location:shop_form.php');
						}
						else {
							header('location:book_gym.php?signup=unsuccessful');
							exit();
						}
						$stmt->close();
						$conn->close();
						
					}
					else {
						
						header('location:book_gym.php?signup=invalid');
						exit();
					}
				
				}
			 	# code...
				else {
					
					header('location:book_gym.php?signup=empty');
					exit();
				}

			}
			else {
				
				header('location:book_gym.php?signup=non');
				exit();
			}
		
	?>



</body>
</html>