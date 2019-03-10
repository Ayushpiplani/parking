<?php
$db=mysql_connect("localhost","root","");
$res=mysql_select_db("authentication",$db);
if($res==true)
echo "db found";
else
echo "db not found";

if(isset($_POST['sub']))
{
	$username= mysql_real_escape_string($_POST["username"]);


	if($password==$Confirm_password){
	mysql_query("INSERT INTO `users`(`username`, `email`, `password`) VALUES ('$username','$email','$password')");
}
}
else{
echo "passwords dont match"; 
}

?>