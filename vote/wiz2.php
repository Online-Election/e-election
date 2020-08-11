<?php  
	
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'newe-electiondb');

	// variable declaration
    $firstname ="";
    $lastname ="";
    $registrationnumber="";
    $password_1  =  "";
	$password_2  =  "";
	//$errors = array(); 

	// call the register() function if register_btn is clicked
	if (isset($_POST['submit'])) {
		Register();
	}

	// call the login() function if register_btn is clicked
	if (isset($_POST['Login'])) {
		Login();
    }
    function Register(){
		global $db;

		// receive all input values from the form
        $firstname    =  $_POST['fname'];
        $lastname    =  $_POST['lname'];
        $registrationnumber= $_POST['number'];
		$password_1  =  $_POST['psw'];
		$password_2  =  $_POST['cnfmpsw'];

		// form validation: ensure that the form is correctly filled
       //encrypt the password before saving in the database

			if ($db){
				$password=MD5($password_1);
				$query = "INSERT INTO newelectiontd (firstname,lastname, registrationnumber,password) 
						  VALUES('$firstname','$lastname','$registrationnumber','$password' )";
				mysqli_query($db, $query);
				

				//echo "data is saved";
				header('location: login.php');				
      }
      
    }
    
    ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 100%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: mediumseagreen;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid mediumseagreen;
}

/* Set a style for the submit button */
.btn {
  background-color: mediumseagreen;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body style="background-color: whitesmoke;">

<form action="wiz2.php" style="max-width:400px;margin:auto" method="POST">
  <table align="center">
    <tr>
      <td><img src="static/images/ud..png" width="100px" height="60px"></td>
      <td><p><img src="static/images/vote3.jpg" width="100px" height="60px" </p></td>
    </tr>
  </table>
  <h2>Regitration</h2>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="first name" name="fname">
  </div>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="last name" name="lname">
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="registration number" name="number">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="password" name="psw">
  </div>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Confirm password" name="cnfmpsw">

  <button type="submit" class="btn" value="submit" name="submit">Register</button>
</form>

</body>
</html>
