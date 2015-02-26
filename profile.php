<?php
session_start();

$user=$_SESSION['uname'];
$bigSpace='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
$bigSpace1='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
$bigSpace2='&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'; 
$con = mysqli_connect("localhost","root","","login");
?>
<html>
<head>
<link rel="stylesheet" type="text/CSS" href="profilestyle.css">
<title >Profle</title>
</head>
<body id="bdy">
<div id="list">
<ul>
<li><a href="profile.php">Profile</a></li>
<li><a href="course.php">Course Details</a></li>

<li><a href="faculty.php">Faculties</a></li>
<li><a href="stud.htm">Students</a></li>
<!--<li><a href="marks.php">Marks</a></li> !-->
</ul>
</div>
<div id="logout"><a href="logout.php">logout</a></div>
	<div id="pswd"><a href="change_pswd.php">Change password</a></div>
    <div id="editp"><a href="editp.php">Edit Profile</a></div>
	<div id="gmenu"><img src="images/menu.png" style="width:300px;height:440px;"/></div>
	<div id="black"><img src="images/menu1.png" style="width:970px;height:410px;"/></div>
	<div id="name"><h1>Indian Institute of Technology Madras</h1></div>
	<div id="iitm"><img src="images/iitm.png" style="width:150px;height:150px;"/></div>
<?php

		//echo " <script>alert('weldone Musfeeeee!!! u done it')</script>";
		$firstq = "select * from student where sid='$user'";
		//$result = $con->query($firstq);
		$result = mysqli_query($con,$firstq);
		$check1 = mysqli_num_rows($result);
		//$row=mysqli_fetch_assoc($result);
		
		if($check1>0)
		{
			while($row=mysqli_fetch_assoc($result))
		       $image =$row['img'];
			
		}
		
		?>
		
<div id="img">
<img src="<?=$image ?>" style="width:200px;height:200px;" />
</div>
<div id="lname">
<?php
$user=$_SESSION['uname'];
$firstq = "select * from student where sid='$user'";
		//$result = $con->query($firstq);
		$result = mysqli_query($con,$firstq);
		$check1 = mysqli_num_rows($result);
		//$row=mysqli_fetch_assoc($result);
		
		if($check1>0)
		{
			while($row=mysqli_fetch_assoc($result))
		   
	   		   echo "<b>".$row['name']."</b>"; 
		}
	  	
?>
</div>
<div id="profile">
<fieldset>
<?php
$user=$_SESSION['uname'];
$firstq = "select * from student where sid='$user'";
		//$result = $con->query($firstq);
		$result = mysqli_query($con,$firstq);
		$check1 = mysqli_num_rows($result);
		//$row=mysqli_fetch_assoc($result);
		$secondq = "select *from course,scourse where scourse.sid='$user' and scourse.code=course.code";
		$result1 = mysqli_query($con,$secondq);
		$check2 = mysqli_num_rows($result1);
		$row1 = mysqli_fetch_assoc($result1);
		if($check1>0 && $check2>0)
		{
			while($row=mysqli_fetch_assoc($result))
		   echo "<i><b>ID</b>".$bigSpace.$bigSpace1.$row['sid'].
				"<br><b>Name</b>".$bigSpace.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$row['name'].
				"<br><b>DOB</b>".$bigSpace.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.'&nbsp;'.$row['dob'].
				"<br><b>Course</b>".$bigSpace.'&nbsp;'.'&nbsp;'.$row1['course'].
				"<br><b>Duration</b>".$bigSpace2.$row['duration'].
				"<br><b>Address</b>".$bigSpace.'&nbsp;'.$row['cadd'].
				"<br>".$bigSpace.$bigSpace.$row['postal'].
				"<br>".$bigSpace.$bigSpace.$row['city'].
				"<br>".$bigSpace.$bigSpace.$row['dis'].
				"<br>".$bigSpace.$bigSpace.$row['state'].
				"<br>".$bigSpace.$bigSpace.$row['pin'].
				"<br><b>Mail ID</b>".$bigSpace.$row['mail'].
				"<br><b>Mobile</b><i> ".$bigSpace.$row['mob'];
	  	}
?>
</fieldset>
</div>
</fieldset>
</div>

</body>
</html>