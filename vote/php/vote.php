 
<?php
//set up connection to our database
$dbname = "vote";
$username = "root";
$password = "";

$conn = new mysqli("localhost",$username,$password,$dbname);

if ($conn->connect_error){
  die("connection failed" . $conn->connect_error);

}
//parse the url and get tha values required
// Inintialize URL to the variable 

$url = $_SERVER['REQUEST_URI'];
      

$url_components = parse_url($url); 
  
 
parse_str($url_components['query'], $params); 
      
// Display result 
// echo $params['vote']."<br>";
// echo $params['cand']."<br>";

//our variables here
$regnumber = $params['vote'];
$candidate = $params['cand'];
$uniqueid = $params['id'];

$myarr = new \stdClass();

//check if reg number exists
$statement= $conn->query("SELECT * FROM voters WHERE reg_number='$regnumber'");

// //define our reg_number values here
// $row = $statement->fetch_assoc();
// $sql = "INSERT INTO voters VALUES('$regnumber','$uniqueid','$candidate')";

	// $res = $conn->query($sql);

	// if ($res==true){
	// 	$myarr->description = "isvoted";
	// 	$myarr->bool = true;
	// 	echo json_encode($myarr);
	// }else{
	// 	$myarr->description = "isvoted";
	// 	$myarr->bool = false;
	// 	echo json_encode($myarr);
	// }
if (is_array($statement->fetch_assoc()) == 1){
	$myarr->description = "isexist";
	$myarr->bool = true;
	echo json_encode($myarr);
}else{
	$sql = "INSERT INTO voters VALUES('$regnumber','$uniqueid','$candidate')";

	$res = $conn->query($sql);

	if ($res==true){
		$myarr->description = "isvoted";
		$myarr->bool = true;
		echo json_encode($myarr);
	}else{
		$myarr->description = "isvoted";
		$myarr->bool = false;
		echo json_encode($myarr);
	}
}

$conn->close();

?>



