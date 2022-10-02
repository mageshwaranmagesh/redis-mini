<?php
    if($_POST['submit.php'])
	{
		$firstname = $_POST['fname'];
		$lastname = $_POST['lname'];
		$email = $_POST['email'];
		$age = $_POST['age'];
        $contact = $_POST['contact'];

		$query = "INSERT INTO user VALUES('firstname','lastname','email','age','contact')";
		$data = mysqli_query($conn,$query);

		IF($data)
		{
			echo "data inserted into database";
			
		}else{
			echo "failed";
		}
	}
	
?>