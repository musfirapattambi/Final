<?php
session_start();
$user = $_SESSION['uname'];
$con = mysqli_connect("localhost","root","","login");
if (mysqli_connect_errno())
  {
    echo "Failed to connect to Database: " . mysqli_connect_error();
    echo "PLEASE TRY LATER";
  }
if(isset($_POST['submit']))
	{   $con = mysqli_connect("localhost","root","","login");
		$current = $_POST['currentpassword'];
	    $new = $_POST['newpassword'];
		$renew = $_POST['renewpassword'];
		$que = "select*from username where uname = '$user' and pass='$current'";
		$run= mysqli_query($con, $que);	
		$check = mysqli_num_rows($run);
	     if($check>0)
		 {   
	        // echo "success";
			$con = mysqli_connect("localhost","root","","login");
			 $fque="update username set pass='$renew' where uname='$user' and pass='$current'";
			 $result = mysqli_query($con, $fque);	
			 if($result > 0)
			 {   
				 echo "<script>alert('Password Updated!!!')
				       window.location = 'profile.php';
				       </script>";
				      
			 } 

		}
		
	    else if(! $check)
		{
			echo "<script>alert('Could not Update Data!!!')
			 window.location = 'change_pswd.php';
			</script>";
		}
		
	}
	
	?>