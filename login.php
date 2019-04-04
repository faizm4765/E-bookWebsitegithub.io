
 <html>
	<head>
		<title> KAAMYABI </title>
		<!--<style>
			form 
		{
			border :3px solid #f1f1f1;
		}
		<style>-->
		
		<link rel ="stylesheet" href ="page.css"> 
	</head>
	<body>
		
		<header>
		<div style="width:100%; position:relative; height:100px; backgroud-color:green;">
		<div class="textLeft">
			<h1><span class="highlight">Central</span> Coalfield Ltd.</h1></div>
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
		<form method="POST">
			<div class ="images">
				<img src ="./imgs./pic.png" alt ="avatar" class ="image">
			
			</div>
		
		
		<div class ="container">
			<p>
				<label><b>User Id</b></label>
				<input type ="text" name="user_id" placeholder ="Enter username" required> 
			</p>
			<p>	
				<label><b>Password</b></label>
				<input type ="password" name ="password" placeholder ="Enter password" required>
			</p>
			<p>	
				<button type="submit" name="submitLogin"><b>LOGIN</b></button>
			</p>
			
			<label>
				<input type ="checkbox" name ="remember" checked ="checked" class ="remember"><span class ="left"> Remember me</span>			
				</label>
		</div>
		<div class ="container">
				<button type ="reset" class ="cancel"><b>Cancel</b></button>
				<span class ="pass"> Forgot <a href="#">password? </a></span>
		</div>
		
		
		</form>
	</body>
 </html>

<?php

if(isset($_POST['submitLogin']))
{
		$user =$_POST['user_id'];
		$password =$_POST['password'];
		
		if($user =="helloworld" && $password=="jhakkas")
		{
			header("Location:datatable.php");
			exit();
			
		}
}		
			
?>



