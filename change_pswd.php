<script>
function pswdvalidation()
{
	     if(pswd.newpassword.value != "" && pswd.newpassword.value == pswd.renewpassword.value) 
	{
      if(pswd.newpassword.value.length < 6) 
	  {
        alert("Error: PASSWORD MUST CONTAIN ATLEAST SIX CHARACTERS!");
        pswd.newpassword.focus();
        return false;
      }
       
	  }
	  if(pswd.renewpassword.value != pswd.newpassword.value)
	  {
		alert("Error: PASSWORD DID NOT MATCH!");
        pswd.currentpassword.focus();		
	  }
	  }
  </script>
<html>
<link rel="stylesheet" type="text/CSS" href="profilestyle.css">
<head><title>Change Password</title></head>
<body id="bdy">
<div id="profile">
<div id="table">
<fieldset>
	<form  action="pswd.php" method="post" name="pswd"  >
	<table align="center" cellpadding="10" width="80%" height="200">
	    <tr>
		<td> Current Password:</td>
		<td><input type="password" name="currentpassword" required="required"></td>
		</tr>
		
		<tr>
		<td>New Password:</td>
		<td><input type="password" name="newpassword" required="required"></td>
		</tr>

		<tr>
		<td>Re-Enter New Password:</td>
		<td><input type="password" name="renewpassword" required="required">
		</td>
		</tr>
		<div id="pswdsubmit">
		<input type="submit" name="submit" value="Submit" onclick="return pswdvalidation()"/>	</div></form>
			<div id="bhome"><a href ="profile.php"><input type="button" name="home" value="Back to home" />	</a></div>
	
		</fieldset>
</div>	
</div>

</body>
</html>	