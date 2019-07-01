<?php
//Database Auth.
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sensors";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$output=array();
header('Content-Type: application/json');


//read API parameters
/*
if((!isset($_GET['id']))){
	$output['status']=false;
	$output['error']="No parameters";
	echo json_encode($output);
	die();
}else{
	$client_id=$_GET['id'];
	//$age=$_GET['age'];
}
*/


// Mysql Query
$sql = "SELECT temp_ID,Time,Temp FROM temp";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
	$output['status']=true;
	$output['count']=$result->num_rows;
    // output data of each row
	$i=0;
    while($row = $result->fetch_assoc()) {
       $output['data'][$i]=$row;
	   $i++;
    }
} else {
    $output['status']=true;
	$output['count']=0;
	$output['data']=array();
	
}
echo json_encode($output);
$conn->close();


?>