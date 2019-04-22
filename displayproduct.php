<?php

	$sql = "SELECT * FROM Product;";
	//query the SQL statement above from the DB using the connection
	$result =mysqli_query($conn, $sql);
	//check if we have any kind of result from the DB
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck>0){
		while($row = mysqli_fetch_assoc($result)){
		
		}
	}

?>