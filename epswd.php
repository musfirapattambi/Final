<?php
 
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
echo "$encrypt"	;
}
?>