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
			
			echo "<br>"."<b>" ."Master of Science in Computer Science and Information Security"."</b>"." will be a flagship program offered by 
			the Indian Institute of Technology-Madras, aims at offering a high standard curriculum in Computer Science and Information 
			Security. The program focuses on a broad grasp of foundations in Computer Science and Information Security, deep understand
			ing of the area of specialization, an innovative ability to solve new problems, and a capacity to learn continually and inte
			ract with trans-disciplinary groups. The technology enhanced e-learning methodologies
			with web based course management system and on-line learning system enriches the program, allow broadening their horizons.
			The duration of the program is 2 years and the courses are carefully designed to attain technical aspects that enable the students
			to grow into competent information security professionals. There are 9 core courses of 3 credits each spread across the first 3 
			semesters accumulating 27 credits. The students are required to do a minor project of 2 credits each during the second and third
			semesters accumulating 4 credits, a lab of 1 or 2 credits each during the first three semesters accumulating 5 credits. 
			The students are also required to take 1 elective course during the first semester, two elective courses during the second 
			semester and three elective courses during the third semester of 3 credits each accumulating 18 credits. The 4th semester 
			is for project/internship of 18 credits. Students are required to undergo an industry or research oriented project in any 
			leading IT or R &D organizations. The total requirement for the program is 72 credits. ";
			}
			
			?>
			</div>
			</body>
			</html>