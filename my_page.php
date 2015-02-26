<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>

<title>User Login</title>

<style type="text/css">
 #top{
  position:relative;
  margin-right:5px;
  float:right;
  }
h2
{
font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; text-align: center; color:DarkCyan; text-decoration: underline;
}
table
{
font-family: Calibri;  
font-size: 18pt;
font-style: normal;
font-color:DarkCyan;
border: 2px solid navy
border-collapse: collapse; 
}
table.inner
{
border: 0px
}
</style>
</head>

<body>
<?php
$ID = $_SESSION['id'];
$F_NAME1 = $_SESSION['F_NAME1'];
$F_NAME2 = $_SESSION['F_NAME2'];
$F_NAME = $F_NAME1." ".$F_NAME2;
$_SESSION['F_NAME'] = $F_NAME;
$_SESSION['id'] = $ID;
if(isset($_SESSION['user_id']))
{
	?>
	
	<h2>Welcome <?php echo $F_NAME; ?></h2>
	
	<a id="top" href="Logout.php">Logout
<?php
}
?>

<table align="center" cellpadding="10" width="100%" height="250">
<tr>
<td>
<a href="Edit_detais.php">EDIT DETAILS
</td>
</tr>

<tr>
<td>
<a href="Student.php" >SEE STUDENTS DETAILS
</td>
</tr>

<tr>
<td>
<a href="change_pwd.php">CHANGE PASSWORD
</td>
</tr>

<tr>
<td>
<a href="timetable.php"> TIMETABLE
</td>
</tr>

</table>
</body>
</html>


