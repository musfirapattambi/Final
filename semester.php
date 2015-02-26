<html>
<head>
<link rel="stylesheet" type="text/CSS" href="profilestyle.css">
<title >Profle</title>
</head>
<body id="bdy">
<div id="list">
<ul>
<li><a href="semester.php?category=Semester 1">Semester 1</a></li>
<li><a href="semester.php?category=Semester 2">Semester 2</a></li>
<li><a href="semester.php?category=Semester 3">Semester 3</a></li>
<li><a href="semester.php?category=Semester 4">Semester 4</a></li>
<li><a href="profile.php">Back to home</a></li>
</ul>
</div>
<div id="gmenu"><img src="images/menu.png" style="width:300px;height:440px;"/></div>
	<div id="black"><img src="images/menu1.png" style="width:970px;height:410px;"/></div>
	<div id="name"><h1>Indian Institute of Technology Madras</h1></div>
	<div id="iitm"><img src="images/iitm.png" style="width:150px;height:150px;"/></div>
	<div id="core"><h3>Core Subjects</h3></div>


	<div id="csub">
<?php
session_start();
$user=$_SESSION['uname'];
$_SESSION['category'] = $_GET['category'];
$category = $_GET['category'];
$con = mysqli_connect("localhost","root","","login");

$sql="select * from semester_1,scourse where scourse.sid='$user' and scourse.code=semester_1.code ";
$result = mysqli_query($con,$sql);
$check = mysqli_num_rows($result);

$sql1="select * from semester_2,scourse where scourse.sid='$user' and scourse.code=semester_2.code";
$result1 = mysqli_query($con,$sql1);
$check1 = mysqli_num_rows($result1);

$sql2="select * from semester_3,scourse where scourse.sid='$user' and scourse.code=semester_3.code";
$result2 = mysqli_query($con,$sql2);
$check2 = mysqli_num_rows($result2);

$sql3="select * from semester_4,scourse where scourse.sid='$user' and scourse.code=semester_4.code";
$result3 = mysqli_query($con,$sql3);
$check3 = mysqli_num_rows($result3);
		
		//$row = mysqli_fetch_assoc($result1);
		if($check >0 && $category=='Semester 1')
		{
		
		while($row=mysqli_fetch_assoc($result))
			
		 echo "<br>".$row['c1'].
		      "<br>".$row['c2'].
			  "<br>".$row['c3'].
			  "<br>".$row['c4'].
			  "<br>".$row['c5'].
			  "<br>".$row['c6'].
			  "<br>".$row['c7'].
			  "<br>".$row['c8'];
			 
		}
		else if($check1 >0 && $category=='Semester 2')
		{
			while($row1=mysqli_fetch_assoc($result1))
			 echo "<br>".$row1['c1'].
		      "<br>".$row1['c2'].
			  "<br>".$row1['c3'].
			  "<br>".$row1['c4'].
			  "<br>".$row1['c5'].
			  "<br>".$row1['c6'].
			  "<br>".$row1['c7'].
			  "<br>".$row1['c8'];
		}
		else if($check2 >0 && $category=='Semester 3')
		{
			while($row2=mysqli_fetch_assoc($result2))
			 echo "<br>".$row2['c1'].
		      "<br>".$row2['c2'].
			  "<br>".$row2['c3'].
			  "<br>".$row2['c4'].
			  "<br>".$row2['c5'].
			  "<br>".$row2['c6'].
			  "<br>".$row2['c7'].
			  "<br>".$row2['c8'];
		}
		else if($check3 >0 && $category=='Semester 4')
		{
			while($row3=mysqli_fetch_assoc($result3))
			 echo "<br>".$row3['c1'].
		      "<br>".$row3['c2'].
			  "<br>".$row3['c3'].
			  "<br>".$row3['c4'].
			  "<br>".$row3['c5'].
			  "<br>".$row3['c6'].
			  "<br>".$row3['c7'].
			  "<br>".$row3['c8'];
		}
	
?>
</div>
<div id="elec"><h3>Elective Subjects<h3></div>
<div id="esub">
<?php

$user=$_SESSION['uname'];
$_SESSION['category'] = $_GET['category'];
$category = $_GET['category'];
$con = mysqli_connect("localhost","root","","login");
$sql="select * from semestere_1,scourse where semestere_1.sid='$user' and scourse.code=semestere_1.code ";
$result = mysqli_query($con,$sql);
$check = mysqli_num_rows($result);
$row = mysqli_fetch_assoc($result);
$sql1="select * from semestere_2,scourse where semestere_2.sid='$user' and scourse.code=semestere_2.code";
$result1 = mysqli_query($con,$sql1);
$check1 = mysqli_num_rows($result1);
$row1=mysqli_fetch_assoc($result1);
$sql2="select * from semestere_3,scourse where semestere_3.sid='$user' and scourse.code=semestere_3.code";
$result2 = mysqli_query($con,$sql2);
$check2 = mysqli_num_rows($result2);
$row2=mysqli_fetch_assoc($result2);
$sql3="select * from semestere_4,scourse where semestere_4.sid='$user' and scourse.code=semestere_4.code";
$result3 = mysqli_query($con,$sql3);
$check3 = mysqli_num_rows($result3);
$row3=mysqli_fetch_assoc($result3);
		if($check >0 && $category=='Semester 1')
		{

		 echo "<br>".$row['e1'].
		      "<br>".$row['e2'].
			  "<br>".$row['e3'].
			  "<br>".$row['e4'].
			   "<br>".$row['e5'];
			}
			else if($check1 >0 && $category=='Semester 2')
			{
			// while()
			  echo "<br>".$row1['e1'].
		      "<br>".$row1['e2'].
			  "<br>".$row1['e3'].
			  "<br>".$row1['e4'].
			   "<br>".$row1['e5'];
			}
			else if($check2 >0 && $category=='Semester 3')
			{
			// while()
			  echo "<br>".$row2['e1'].
		      "<br>".$row2['e2'].
			  "<br>".$row2['e3'].
			  "<br>".$row2['e4'].
			   "<br>".$row2['e5'];
			}
			else if($check3 >0 && $category=='Semester 4')
			{
			// while()
			  echo "<br>".$row3['e1'].
		      "<br>".$row3['e2'].
			  "<br>".$row3['e3'].
			  "<br>".$row3['e4'].
			   "<br>".$row3['e5'];
			}
		    else if($row3['e1'] ==NULL) 
			{
				echo "<br>"."No electives Available in this Semester";
			}
			else if($row['e1']==NULL)
			{
				echo "<br>"."No electives Available in this Semester";
			}
			
?>

    </div>
	</body>
	</html>