<?php

	$host ="localhost";
	$user ="root";
	$password ="";
	$db_name ="first_try";
	
	$conn =mysqli_connect($host,$user,$password,$db_name);
	
	if(!$conn || !(mysqli_select_db($conn,"first_try")))
	{
		die($conn_error);
	}
	else
	{	
		if(isset($_POST['register']))
		{
		$fname =$_POST['firstname'];
		$lname =$_POST['lastname'];
		$mail =$_POST['mail'];
		$aadhar =$_POST['aadhar'];
		$city =$_POST['city'];
		$password =$_POST['password'];
		$cmnt =$_POST['comment'];
		
		$sql ="INSERT INTO form(first_name,last_name,email,city,password,Aadhar_number,comments) values ('$fname','$lname','$mail','$city','$password','$aadhar','$cmnt')";
		
		
		if(!mysqli_query($conn,$sql ))
		{
			die("OOPS! Something went wrong!".mysqli_error($conn));
			
		}
		else
		{		
				echo "<script type=\"text/javascript\">".
					 "alert('Successfully registered!');".
					 "</script>";
			
			header("Location:form.php");
		}
	
	mysqli_close($conn);
		}
	}
	//yes ! I did it finally!
	//header("refresh:5;location:form.php");
	//exit();
?>