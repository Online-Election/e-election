<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
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
  height: 400px; /* only for demonstration, should be removed */
  background: #ccc;
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
  height: 400px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: rgb(129, 129, 129);
  padding: 10px;
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
</style>
<table>
    <tr>
      <td><img src="static/images/ud..png" width="70px" height="50px"></td>
      <td><p><img src="static/images/vote3.jpg" width="80px" height="40px" </p></td>
    </tr>
  </table>
<head>
    <link rel="stylesheet" type="text/css"
    href="static/css/votecss.css">
    <ul class="nav">
        <li><a href="home.php">HOME</a></li>
        <li><a href="cam.php">CAMPAIN</a></li>
        <li><a href="vote.php">VOTE</a></li>  
        <li><a href="php/voteres.php">RESULT</a></li>
        <li><a href="about.php">ABOUT</a></li>
      </ul>
</head>
<body style="background-color: whitesmoke;"></body>

<marquee><img src="static/images/vote.png" alt ="logo" width="70" height="50"> 
  <img src="static/images/ud..png" alt ="logo" width="70" height="50">
  <img src="static/images/vote3.jpg" alt ="logo" width="70" height="50"></marquee>

<section>
  <nav>
<h1 align="center">ONLINE CAMPAIN PLATFORM</h1>
    <p>Online political <b>campaign</b>  is organized effort which seeks to influence the decision making with the specific group by using the ICT to support information provision  and top -down engagement. The message of campaign contain the ideas that the candidate want to share with the voters . It is to get those who agree with their ideas to support them when running for a political position .The message often consist of several taking point about the policy issues .The main point summarize the main ideas of the 
      campaign and frequency repeated frequency in to create a lasting impression with the voters.<br> Online political campaign involve the link which may run the story that someone is trying to get elected or to do something about certain aspects regarding  their specific country.

  	Hence the candidate is records a video that show him talking about the things he is going to do when he is elected leader.so as the audience should go and  download the video clip to see the information from their candidates. 
      </p>
  </nav>
  
  <article>
    <h1 align="center">ONLINE VOTE PLATFORM</h1>
    <p>This is online voting platform which enable voters to vote at any where, which is helpful to reduce
       time wastage and also will influence the number of people to register for them self </p>
  </article>
</section>

<footer>
  <p align="center">All Copy right reserved</p>
</footer>

</body>
</html>
