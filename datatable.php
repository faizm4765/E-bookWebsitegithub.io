<?php

$conn = mysqli_connect("localhost","root","","first_try");

if(!$conn)
{
		die($conn_error);
	
}

$sql ="SELECT * from form";

$result =mysqli_query($conn,$sql);

echo "<table border='1' cellpadding='10' cellspacing='0' width='80%' align='center'>
		<tr>
			<th>Firstname	</th>
			<th>Lastname</th>
			<th>E-mail	</th>
			<th>Aadhar Number</th>
			<th>City</th>
			<th>Password</th>
		</tr>";

	while($row = mysqli_fetch_array($result))
	{
		echo "<tr>";
		echo "<td>".$row["first_name"]."</td>";
		echo "<td>".$row["last_name"]."</td>";
		echo "<td>".$row["email"]."</td>";
		echo "<td>".$row["Aadhar_number"]."</td>";
		echo "<td>".$row["City"]."</td>";
		echo "<td>".$row["Password"]."</td>";
		echo "</tr>";
		
	}
	echo "</table>";
	mysqli_close($conn);
?>