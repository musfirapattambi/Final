<?php
session_start();
$user = $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","login");
$firstq = "select * from student where sid='$user'";
	
		$result = mysqli_query($con,$firstq);
		$check1 = mysqli_num_rows($result);
		$row = mysqli_fetch_assoc($result);
		if($check1>0)
		{
			$name = $row['name'];
			$id = $row['sid'];
			$dob = $row['dob'];
			$course = $row['course'];
			$duration = $row['duration'];
			$address = $row['cadd'];
			$postal = $row['postal'];
			$city = $row['city'];
			$dis = $row['dis'];
			$state = $row['state'];
			$pin = $row['pin'];
			$mob = $row['mob'];
			$mail = $row['mail'];
	  	}
		

   ?>
<html>
<link rel="stylesheet" type="text/CSS" href="profilestyle.css">
<head><title>Editp</title></head>
<body id="bdy">
<div id="profile">
<div id="table">
<fieldset>
	<form action="validate.php" method="post" name="eform"  >
	<table align="center" cellpadding="10" width="40%" height="200">
	    <tr>
		<td> ID</td>
		<td><input type="text" name="id" value="<?php echo $id ?>" disabled></td>
		</tr>
		
		<tr>
		<td>Name </td>
		<td><input type="text" name="name" value="<?php echo $name ?>" disabled </td>
		</tr>

		<tr>
		<td>DOB</td>
		<td><input type="text" name="dob" value="<?php echo $dob ?>" disabled  >
		</td>
		</tr>

		<tr>
		<td>Course</td>
		<td>
		<input type="date" name="course" value="<?php echo $course ?>" disabled > 
		</td>
		</tr>
 
		<tr>
		<td>Duration</td>
		<td>
		<input type="text" name="duration" value="<?php echo $duration ?>" disabled >
		</td>
		</tr>

		<tr>
		<td>Address</td>
		<td>
		<input type="text" name="address" value="<?php echo $address ?>" required>
		</td>
		</tr>
		<div id="address">
		<tr><td></td>
		<td>
		<input type="text" name="postal" value="<?php echo $postal ?>" required>
		</td>
		</tr>
		<tr><td></td>
		<td>
		<input type="text" name="city" value="<?php echo $city ?>" required>
		</td>
		</tr>
		<tr><td></td>
		<td>
		<input type="text" name="dis" value="<?php echo $dis ?>" required>
		</td>
		</tr>
		<tr><td></td>
		<td>
		<input type="text" name="state" value="<?php echo $state ?>" required>
		</td>
		</tr>
		<tr><td></td>
		<td>
		<input type="text" name="pin" value="<?php echo $pin ?>" required>
		</td>
		</tr>
	    <tr>
		<td>Mail ID</td>
		<td><input type="text" name="mail" value="<?php echo $mail ?>" required></td>
		</tr>
		<tr>
		<td>Mob</td>
		<td>
		<input type="text" name="mob" value="<?php echo $mob ?>" required>
		</td>
		<div id="submit">
		<input type="submit" name="submit" value="Submit" />
		</div>
		</table>
		</form>
		</div>
		</div>
		</div>
		</fieldset>


</body>
</html>