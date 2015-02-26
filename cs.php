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
	</body>
	</html>
	<div id="lname">
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
			echo "<u>"."$course"."["."$code"."]"."</u>";
			?>
			</div>
			<div id="para">
			<?php
			
			echo "<br>"."The history of computing is closely linked with the development of mathematical models in physical sciences
			including physics and chemistry and more recently, biology. Today, computer modeling is increasingly understood to be the
			third 'leg', along with theory and experimentation, of the tripod that forms the foundation of research in mathematical and
			physical sciences.This close association between the sciences and computing has lead to the emergence of the cross-discipline 
			known as "."<b>"."Computational Science"."</b>"." This discipline is concerned with the development and implementation of new mathematical
			techniques, algorithms, and methodologies for solving problems that ranges from pure science to applied areas like drug design,
			finance, and manufacturing design. The application of computation to chemistry, for example, has led to the nascent field of 
			computational chemistry, which has found many applications in the design of pharmaceuticals. Computational Science combines 
			mathematics, computer science, information technology, basic sciences and engineering disciplines.India has seen a spectacular 
			growth of the IT industry in the last decade. While this has brought about superlative growth in the IT employment sector, it 
			is important to note that there still exists a critical shortage of trained man power in the field of advanced research and 
			development of information technology for science and engineering.To address this gap, IITM propose launching a suite of
			advanced programme in Computational Science. ";
			}
			
			?>
			</div>
			</body>
			</html>