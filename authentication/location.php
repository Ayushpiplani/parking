<?php
$db=mysql_connect("localhost","root","");
$res=mysql_select_db("location",$db);
if($res==true)
echo "db found";
else
echo "db not found";

if(isset($_POST['sub']))
{
	$location= mysql_real_escape_string($_POST["location"]);
	
	
	mysql_query("SELECT * FROM `locate`");
	echo "locationfound";

}

?>