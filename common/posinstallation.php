<?php 

$data=$_REQUEST;
if($data['status'] == "new")
{
	
	$counter = $data['counter'];
	$dbname = $data['dbname'];
	$dbpass = $data['dbpass'];
	$username = $data['username'];
	$userpass = $data['userpass'];
	
}else{
	
	
}
print_r($data);

?>