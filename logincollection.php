
<html>
	<head>
		<link rel="stylesheet" href="collection.css">

	</head>
<body>
	<!--<form action="logincollection.php" method="post">
				<label>E-Mail</label> 
			<input type ="text" name= "mail" placeholder="Enter your mail" required > <br>
		
		<br>
		
		<br>
		<label>Password</label> 
			<input type ="password" name= "pass" placeholder="Enter your password" required> <br>
		
	<input type="submit" name="submit" value="LOGIN" />
	</form>

</body>-->


		<body>
		
		<header>
		<div style="width:100%; position:relative; height:100px; backgroud-color:green;">
		<div class="textLeft">
			<h1><span class="highlight">Bookshelf</span> </h1></div>
		<div class="logoRight">
			<img src ="./imgs./c9.jpg" class ="ccl">
		</div>
		</div>
		<!--<div class="container">-->
		
		
		<!--
			<div class="textLeft">
				<h1><span class="highlight">Central</span> Coalfield Ltd.</h1>
			</div>
			<div class="logoRight">
				<img src ="./imgs./ccl1.jpg" class ="ccl">
			</div>
		-->	
		</div>
		</header>
		<form method="POST" action="logincollection.php">
			<div class ="images">
				<img src ="./imgs./pic.png" alt ="avatar" class ="image">
			
			</div>
		
		
		<div class ="container">
			<p>
				<label><b>User Id</b></label>
				<input type ="text" name="mail" placeholder ="Enter your mail id" required> 
			</p>
			<p>	
				<label><b>Password</b></label>
				<input type ="password" name ="pass" placeholder ="Enter password" required>
			</p>
			<p>	
				<button type="submit" name="submit"><b>LOGIN</b></button>
			</p>
			
			<label>
				<input type ="checkbox" name ="remember" checked ="checked" class ="remember"><span class ="left"> Remember me</span>			
				</label>
		</div>
		<div class ="container">
				<button type ="reset" name="cancel" class ="cancel"><b>Cancel</b></button>
				<span class ="pass"> Forgot <a href="#">password? </a></span>
		</div>
		
		
		</form>
	</body>
 </html>

</html>

<?php

	$host ="localhost";
	$user ="root";
	$password ="";
	$db_name ="first_try";
	
	$conn =mysqli_connect($host,$user,$password,$db_name);
	
if(isset($_POST['submit'])){
	
	$email=$_POST['mail'];
	$pass=$_POST['pass'];
	
	$sql = "SELECT * FROM form where email='".$email."' and Password='".$pass."'";
	//echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    echo "<meta http-equiv='refresh' content='0;url=download.html'>";

} else {
    echo "Username or password is incorrect";
}


$conn->close();
	

	
}
?>