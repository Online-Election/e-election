<?php  
	session_start();
	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'newe-electiondb');

	// variable declaration
   // $firstname ="";
    //$lastname ="";
    $registrationnumber="";
    $password="";


	// call the register() function if register_btn is clicked
	if (isset($_POST['submit'])) {
	    Login();
	}

	// call the login() function if register_btn is clicked

    function Login(){
		global $db, $regisrationnumber;

		// grap form values
		$registrationnumber = $_POST['number'];
		$password = $_POST['psw'];

		$_SESSION['reg_number'] = $registrationnumber;

		// attempt login if no errors on form
		if ($db) {
			$password = md5($password);

			$query = "SELECT * FROM newelectiontd WHERE registrationnumber='$registrationnumber' AND password='$password' LIMIT 1";
			$results = mysqli_query($db, $query) or die('error');

			if (mysqli_num_rows($results) == 1) {
		
					header('location: /vote/home.php');
				
			}else {
				echo "Wrong registration number/password combination";
			}
     }else{
        echo "Wrong registration number/password combination";
     }
    }
    
    ?>