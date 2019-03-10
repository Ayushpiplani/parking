<?php
session_start();
$db=mysql_connect("localhost","root","");
$res=mysql_select_db("authentication",$db);
if(isset($_POST['register_btn']))
{
	$username= mysql_real_escape_string($_POST["username"]);
	$email= mysql_real_escape_string($_POST["email"]);
	$password= mysql_real_escape_string($_POST["password"]);
	$Confirm_password= mysql_real_escape_string($_POST["Confirm_password"]);

	//if($password==$Confirm_password){
	mysql_query("INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");
//}
}
else{
echo "passwords dont match"; 
}

?>
<html>
<head>
<head>
<form>
<table>
<form action="register.php" method="POST">
<table>
<tr><td>
<label>username</label>
<input type="text" name="username">
</td></tr>
<tr><td>
<label>email</label>
<input type="email" name="email">
</td></tr>
<tr><td>
<label>password</label>
<input type="password" name="password">
</td></tr>
<tr><td>
<label>Confirm password</label>
<input type="password" name="Confirm_password">
</td></tr>
<tr><td>
<input type="submit" name="register_btn" value="Register">
</td></tr>
</table>
</form>
</body>
</html>