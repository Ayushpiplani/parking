<?php
include "connect.php";
$response=array();

$email=$_POST['email'];
$password=($_POST['password']);

	if(empty($email) || empty($password))
	{
		$response["status"]="error";
		$response["message"]="please fill both the fields";
        echo json_encode($response);


	}
$result=mysql_query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
if( mysql_num_rows($result)>0 )
{ 
		$response["status"]="success";
		$response["message"]="login succeesful";
		echo json_encode($response);
} 
else
{
  $response["status"]="failure";
  $response["message"]="login failed please fill correct username and password";
  echo json_encode($response);

}
