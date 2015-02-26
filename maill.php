	<?php
	session_start();
	?>


<html>

<head>
</head>
<body>
	<?php
	
	ini_set('include_path','C:\wamp\PHPMailer');
	require("class.phpmailer.php");
	require("class.smtp.php");
	$mail = new PHPMailer();	
	$email = $_POST['mail'];
    $con = mysqli_connect("localhost","root","","login");
	if (mysqli_connect_errno())
	  {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  }
 $q= "select * from username,student where student.mail='$email' and username.uname=student.sid";
 $result = mysqli_query($con,$q);
 $check1 = mysqli_num_rows($result);
 $row=mysqli_fetch_assoc($result);
 if($check1!=0) 
 {          
            $uname=$row['uname'];
            $pass=$row['pass'];
            $to= $row['mail'];
	$encrypt = md5(1290*3+$pass);					     			
	$mail->isSMTP();	
    $mail->Mailer = "smtp";	
	$mail->Host = "ssl://smtp.gmail.com"; 
	$mail->SMTPAuth = true;                             
	
	$mail->Username = 'musfi.student@gmail.com';
	$mail->Password = 'musfirapattambi';                
	$mail->SMTPSecure = 'ssl';     
	$mail->Port = 465;   
    $mail -> SingleTo = true; 	// TCP port to connect to

	$mail->From = 'Forget password recovery team';
	$mail->FromName = 'Student Admnistration';
	$mail->addAddress( $to);     // Add a recipient
	
	
	$mail->isHTML(true);                                 

	$mail->Subject = 'Forgot Password Request';
	$mail->Body    = 'Your USERNAME is:'.$uname.'<br/> Password is: '. $pass;
	$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) 
    {
      echo 'Message could not be sent.<br/>';
      echo 'Mailer Error: ' . $mail->ErrorInfo;
    } 
    else 
    {
    echo "<h4><span style='color: #ff0000;'> Your Password Has Been Sent To Your Registered Email Address.</span></h4>";      
	}
    }
     
    
	        
	else
	{
	echo("Message Could not be sent : Use your registered mail ID");
	}
	
    mysqli_close($con);
	?>
	</body>
	</html>
