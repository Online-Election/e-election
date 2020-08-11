<?php
$db = mysqli_connect('localhost', 'root', '', 'newe-electiondb');

// variable declaration
 // $firstname ="";
 // $lastname ="";
  $registrationnumber="";
  $password="";
$errors = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['submit'])) {
  login();
}

function Login(){
        global $db, $regisrationnumber, $errors;
    
        // grap form values
        $registrationnumber = $_POST['number'];
        $password = $_POST['psw'];
    
        // make sure form is filled properly
        if (empty($regisrationnumber)) {
          array_push($errors, "registrationnumber is required");
        }
        if (empty($password)) {
          array_push($errors, "Password is required");
        }
    
        // attempt login if no errors on form
        if (count($errors) == 0) {
          $password = md5($password);
    
          $query = "SELECT * FROM newelectiontd WHERE registrationnumber='$registrationnumber' AND password='$password' LIMIT 1";
          $results = mysqli_query($db, $query);
    
          if (mysqli_num_rows($results) == 1) {
        
              header('location: project/2home.php');
            
            } else {
            array_push($errors, "Wrong registrationnumber/password combination");
          }
            }
        }
  ?>
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
<body style="background-color: whitesmoke;"></body>

<form action="php/function2.php" style="max-width:400px;margin:auto" method="POST">
  <table align="center">
    <tr>
      <td><img src="static/images/ud..png" width="100px" height="60px"></td>
      <td><p><img src="static/images/vote3.jpg" width="100px" height="60px" </p></td>
    </tr>
  </table>
  <h2>Login</h2>
  
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="registration number" name="number">
  </div>
  
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="password" name="psw">
  </div>
  <button type="submit" class="btn" name="submit" value="submit">login</button>
  <button> if your not registed<a href="wiz2.php"> register here</a> </button> 
</form>
  </P>
</body>
</html>