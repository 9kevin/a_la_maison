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
	
		$username = mysqli_real_escape_string($conn, $_POST['email1']);
		$password = mysqli_real_escape_string($conn, $_POST['password1']);
		$client = mysqli_real_escape_string($conn, $_POST['client']);

		if($_POST){

			$query = "SELECT * From Users Where Email = '$username' and Password = '$password'";
			$query2 ="SELECT * From Client where Client_ID = '$client'";
			$result = mysqli_query($conn, $query);
			$result2 = mysqli_query($conn, $query2);
			if(mysqli_num_rows($result)==1 || mysqli_num_rows($result2)==1){
				session_start();
				$_SESSION["EMAIL"]= $username;
				$_SESSION['auth']='true';
				header('location:shop_form.php');
			}
			else {
				header('location:log_in.php?signup=invalid');
				die();
			}
		}

	?>

</body>
</html>