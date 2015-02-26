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
	{   

        
		    $address = $_POST['address'];
			$postal = $_POST['postal'];
			$city = $_POST['city'];
			$dis = $_POST['dis'];
			$state = $_POST['state'];
			$pin = $_POST['pin'];
			$mob = $_POST['mob'];
			$mail =$_POST['mail'];
		$que = "update student set cadd='$address', 
		                           postal='$postal',
                                   city='$city',
								   dis='$dis',
								   state='$state',
								   pin='$pin',
								   mob='$mob',
								   mail='$mail' where sid='$user'";
		$result = mysqli_query($con, $que);
		if(! $result)
		{
			echo "couldnot update data";
		}
		else
		{
			?><script>
			alert('Updated Successfully!');
			window.location = "profile.php";
			</script><?php
		}
	}
	?>
			