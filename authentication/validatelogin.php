<?php
include "connect.php";
if(isset($_POST['fsub']))
	{
		$uname=$_POST['uname'];
		$pswd=$_POST['pswd'];
		$username="SELECT * FROM `login` WHERE 'username'=$uname";
        $password="SELECT * FROM `login` WHERE 'password'=$pswd";
        if($username && $password)
        	echo "successfully logged in";
        else
        	echo "try again";


    }