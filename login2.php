<html>
<head>
<link rel="stylesheet" type="text/CSS" href="style.css">
<title> Log in page</title>
</head>
<body id="bdy">
<?php
echo "<script>alert('incorrect password or username')</script>"?>
<div id="login">
<fieldset style="border:2px solid #7A3D00">
<form method="post" action="connect.php">
<font color="#7A3D00">UserID<br><input type="text" name="user" size="40"><br>
Password<br><input type="password" name="pswd" size="40"><br>

<br><input id="btn" type="submit" name="submit" value="login" >
</font>
</form>
</fieldset>
</div>
</body>
</html>