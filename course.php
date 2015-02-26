
	<?php
	session_start();
    $user = $_SESSION['uname'];
	$con = mysqli_connect("localhost","root","","login");
    $secondq = "select *from course,scourse where scourse.sid='$user' and scourse.code=course.code";
		$result1 = mysqli_query($con,$secondq);
		$check2 = mysqli_num_rows($result1);
		$row1 = mysqli_fetch_assoc($result1);
		if($check2>0)
		{
			$course=$row1['course'];
			$code= $row1['code'];
			if($code=="msis01")
			{
				header('location:is.php');
			}
			if($code=="mscs01")
			{
				header('location:cs.php');
			}
		}
		
		
		?>
	