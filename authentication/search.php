<?php
include "connect.php";
$response=array();
$search=$_POST["location"];
$sql=mysql_query("SELECT * from `locate` where `location` LIKE '%$search%'");
$getresult=array();
echo("locations");
if(mysql_num_rows($sql)>0)
	{
	while($row=mysql_fetch_assoc($sql))
	{
		$getresult[]=$row;
	}
	echo json_encode($getresult);
}
else
{  
	 $response["status"] = "error";
    $response["message"] = "No Data Found.";
    echo json_encode($response);

}
?>