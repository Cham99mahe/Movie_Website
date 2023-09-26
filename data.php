<html>
	<body>
		<?php
			$con = mysqli_connect("localhost","root","","movie_website");
			
			// Check connection_aborted
			if($con === false){
				die("ERROR: Could not connect. ".mysqli_connect_error());
			}
			
			$fname = $_REQUEST['fname'];
			$lname = $_REQUEST['lname'];
			$email = $_REQUEST['email'];
			$password= $_REQUEST['password'];
			
			$sql = "INSERT INTO register VALUES ('$fname','$lname','$email','password')";
			
			if(mysqli_query($conn, $sql)){
				echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";
 
            echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $address\n $email");
			}	 	
			else{
				echo "ERROR: Hush! Sorry $sql. ". mysqli_error($conn);
			}
			
			mysqli_close($conn);
		?>
	</body>
</html>