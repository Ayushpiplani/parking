<?php
$conn=mysql_connect("localhost","root","") or die("could not connect");
$res=mysql_select_db("authentication",$conn) or die("database not found"); //returns true or false in res
 if($res==true)
echo "db found";
else
echo "db not found";

?>  