<!DOCTYPE html>
<html >
<head>
<title>e-Vote</title>
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
<style>
    /*BLOCKS ON HOME PAGE*/
     .navBAR{margin:04 auto;width:20px;}
  .navBAR ul{padding:0px;}/*this will align all links vertically*/
  .navBAR ul li{float:left;margin:1px;position:relative;background-color:mediumseagreen;border-radius:10px;list-style-type:none;}
  .navBAR ul li a{text-decoration:none;color:rgb(8, 8, 8);padding:5px;font-weight:bolder;display:block;width:600px;text-align:left;}
  .navBAR ul li ul{position:absolute;visibility:hidden;}

  
* {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
  background-color: #666;
  padding: 30px;
  text-align: center;
  font-size: 35px;
  color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
  float: left;
  width: 50%;
  height: 500px; /* only for demonstration, should be removed */
  background: #f1f1f1;
  padding: 20px;
}

/* Style the list inside the menu */
nav ul {
  list-style-type: none;
  padding: 0;
}

article {
  float: left;
  padding: 20px;
  width: 50%;
  background-color: #f1f1f1;
  height: 500px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgb(141, 138, 138);
  padding: 3px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
/* VI BLOCK*/
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 2px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.button10 {border-radius: 15px;}
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
    p{align-content: center;}
    .nav {
      background-color:mediumseagreen; 
      list-style-type: none;
      text-align: center;
      margin: 0;
      padding: 0;
    }
    
    .nav li {
      display: inline-block;
      font-size: 20px;
      padding: 20px;
    }
    </style>
    <ul class="nav">
      <li><a href="home.php">HOME</a></li>
      <li><a href="cam.php">CAMPAIN</a></li>
      <li><a href="vote.php">VOTE</a></li>  
      <li><a href="php/voteres.php">RESULT</a></li>
      <li><a href="about.php">ABOUT</a></li>
    </ul>
    <body>
      <table
      
      border="2%"
      aria-setsize="100%"
      >
      
</style>
</head>


    <body style="background-color: whitesmoke;"></body>


<section>
  <nav>
<h1 align="center">NEW FEEDS & ANNOUNCEMENT</h1>
<div class="navBAR">
    <ul>
        <li ><a href="contesters.pdf">Names & postion of contesters</a> 
            <li >
            <a href="ttable.pdf">Election process time table is out now</a>
         
            <li ><a href="mawi.php"></a>Election process coming up soon!!!!!</a>
            </ul>
           </div>
  </nav>
  
  <article>
    <h1 align="center">UPCOMING EVENTS</h1>
    
            <div class="navBAR">
                <ul style="background-position: center; background-color:whitesmoke;">
                    <li ><a href="static/docs/DATE.pdf">Election Timetable out on 14 july </a>
                  <li ><a href="mawi.php">Election process time table is out now</a>
                    <li ><a href="jex.php">Election process time table is out now</a>
                    <li ><a href="mawi.php">Election process time table is out now</a>
                
                </ul>
                </div>
      </ul>
  </article>
</section>

<footer>
  <p align="center">All Copy right reserved</p>
</footer>

</body>
</html>
