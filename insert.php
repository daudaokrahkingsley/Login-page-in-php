
<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php

		
		$conn = mysqli_connect("localhost", "root", "", "population_db");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$id=$_GET['id'];
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$employ = $_REQUEST['employ'];
		$dob = $_REQUEST['dob'];
		$gender = $_REQUEST['gender'];
		$region = $_REQUEST['region'];
   		
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO people VALUES ('$id','$first_name',
			'$last_name','$employ','$dob','$gender', '$region')";
		
		if(mysqli_query($conn, $sql)){
			
                        echo "Successfull";
			
		} else{
			echo "ERROR:  Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
