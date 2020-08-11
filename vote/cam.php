<!DOCTYPE html>
<html>
  <title>lets Vote</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <table>
        <tr>
          <td><img src="static/images/ud..png" width="70px" height="50px"></td>
          <td><p><img src="static/images/vote3.jpg" width="80px" height="40px" </p></td>
          <td style="padding-left:15%;"><p id="reg">
        <?php 
        session_start();
        $registrationnumber = $_SESSION['reg_number'];

        print_r($registrationnumber);
        ?>
          
        </p></td>
        </tr>
      </table>
<head>
    <link rel="stylesheet" type="text/css"
    href="static/css/votecss.css">
    <ul class="nav">
        <li><a href="home.php">HOME</a></li>
        <li><a href="#Campain">CAMPAIN</a></li>
        <li><a href="vote.php">VOTE</a></li>  
       <li><a href="php/voteres.php">RESULT</a></li>
        <li><a href="about.php">ABOUT</a></li>
      </ul>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

</head>
<body style="background-color: whitesmoke;">

<h2 style="text-align:center">CAMPAINS</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="static/images/pic (1).png" alt="isa" style="width:100%">
      <div class="container">
        
        <p class="title">USRC CoICT</p>
        <p>Click here to read</p>
        
        <p><button class="button">John Yunusi</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="static/images/pic (2).jpg" alt="theo" style="width:100%">
      <div class="container">
        <p class="title">PRESIDENT</p>
        <p> My name is THEOBALD THADE and am the contestant of...<a href="static/docs/paulah.pdf">read</a> </p>
      
        <p><button class="button">Theobald Thade</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="static/images/pic (1).jpg" alt="jex" style="width:100%">
      <div class="container">

        <p class="title">USRC CoICT</p>
        <p>Click here to read</p>
       
        <p><button class="button">Jexe Xibona</button></p>
      </div>
    </div>
  </div>
</div>

</body>
</html>
