
<html>

	<head>
		<title> </title>
		<!--<style>
			
			form {
					text-align =center;
					padding-top =120em;
					font-size =30em;
				 }
			
			input { 
					width =250em;;
					height =40em;
					font-size =26em;
				   }
			
		</style>  -->
		<link rel ="stylesheet" href ="style.css">
	</head>


<body>	
		<header>
		<div style="width:100%; position:relative; height:100px; backgroud-color:green;">
		<div class="textLeft">
			<h1><span class="highlight">Bookshelf</span></h1></div>
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


		<div class ="register">
			<h1>Register</h1>
		</div> 
		
	<div class ="container">
		<form action="lallu.php" method="POST">

		<label>FIRST NAME</label> 
			<input type ="text" name= "firstname" placeholder="Enter first name" required > <br>
		
		<br>
		
		<br>
		<label>LAST NAME</label> 
			<input type ="text" name= "lastname" placeholder="Enter last name" required> <br>
		
		<br>
		</br>
		
		<label>E-MAIL</label> 
			<input type ="text" name= "mail" placeholder="Enter your mail id" required> <br>
		
		<br>
		
		</br>
		
		<label>AADHAR NUMBER</label> 
			<input type ="text" name= "aadhar" placeholder="Enter your aadhar number" required> <br>
		
		<br>
		<br>
		
		<label>CITY</label> 
			<input type ="text" name= "city" placeholder="Enter your current city" required> <br>
		
		<br>
		</br>
		
		<label>PASSWORD</label> 
			<input type ="password" name= "password" placeholder="Only alphanumeric characters allowed" required>
		<br>
		<br>
		<label>COMMENT</label>
			<textarea rows="4" cols="60" name="comment" placeholder="We would highly appreciate your feedback and suggestions for our website"></textarea>
		<br>
		<br>
		<button type ="submit" class="submit" name="register"> Register</button>
		
		<div class ="signin">
		<p>Already have an account?<a  href="logincollection.php"><span class="sign" style="color:blue;">Sign in</span></a></p>
		
		</div>
		
		</form>
		
	</div>	
		
		<footer class="last">
			<h3>Coal India Copyright &copy;</h3>
		</footer>

</body>

</html>
