<html>
<head>
<link rel="stylesheet" type="text/CSS" href="profilestyle.css">
<title >Profle</title>
<style>

h3
{
font-family: Calibri; 
font-size: 22pt; 
font-style: normal; 
font-weight: bold; 
text-align: center; 
color: #8B4500; 
text-decoration: underline;
}
table
{
font-family: Calibri; 
color:black; 
font-size: 11pt;
font-style: normal;
background-color: 	#E8BF6C;
border-collapse: collapse; 
border: 2px solid brown;
}
table.inner{border: 0px}
 .required:after
 {
	 content:"*";
	 color: #FF0000
 }
table
{
border: 2px solid navy;
border-spacing: 5px;
border-collapse: collapse;
padding: 5px; 
width :700px;
height:500px;
margin-left: 300px;
margin-right: auto;
margin-top: 3cm;
}
tr, td ,th{ 
  border: solid;
  border-width: .25px solid navy;
}

</style>
</head>
<body id="bdy">
<div id="list">
<ul>
<li><a href="profile.php">Profile</a></li>
		<li><a href="course.php">Course Details</a></li>
		<li><a href="">Faculties</a></li>
		<li><a href="stud.htm">Students</a></li>
		<li><a href="profile.php">Back to home</a></li>
</ul>
</div>
<div id="gmenu"><img src="images/menu.png" style="width:300px;height:440px;"/></div>
	<div id="black"><img src="images/menu1.png" style="width:970px;height:410px;"/></div>
	<div id="name"><h1>Indian Institute of Technology Madras</h1></div>
	<div id="iitm"><img src="images/iitm.png" style="width:150px;height:150px;"/></div>
	<!--<div id="sem1"><h1>Semester 1</h1></div>
	<div id="sem2"><h1>Semester 2</h1></div>
	<div id="sem3"><h1>Semester 3</h1></div>
	<div id="sem4"><h1>Semester 4</h1></div> !-->
    <table>

	<th>ID</th>
	<th>Name</th>
	<th>Department</th>
	<th>Area of intrest</th>



<?php
session_start();
$user=$_SESSION['uname'];
$con = mysqli_connect("localhost","root","","login");
$sql="select * from faculty_profile";
$result = mysqli_query($con,$sql);
 $check = mysqli_num_rows($result);
  if($check > 0 )
			{
	  while($row = mysqli_fetch_assoc($result))
			 
		    echo '<tr>
		   <td>' .$row['id'].'</td>
		   <td>' .$row['name'].'</td>
		   <td>'.$row['department'].'</td>
		   <td>'.$row['projects'].'</td>
			</tr>';} ?>
			</table>
			</html>