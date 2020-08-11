
var reg_number = document.getElementById("reg").textContent;


function candidateone() {
	//this function if for firstcandidate
	var name = document.getElementById('candidate1name').textContent;
	var unique1 = 1;

	var url = "http://localhost/vote/php/vote.php?vote="+reg_number+"&cand="+name+"&id="+unique1;

	fetch(url)
	  .then(response => response.json())
	  .then(data => {
	  	if (data.description == "isexist") {
	  	alert("You have voted already");
	  }else{
	  	alert("voted successfully");
	  }})

}

function candidatetwo() {
	//this function if for firstcandidate
	var name = document.getElementById('candidate2name').textContent;
	var unique1 = 2;

	var url = "http://localhost/vote/php/vote.php?vote="+reg_number+"&cand="+name+"&id="+unique1;
	

	// console.log(url);
	// console.log(name,reg_number);
	fetch(url)
	  .then(response => response.json())
	  .then(data => {
	  	if (data.description == "isexist") {
	  	alert("You have voted already");
	  }else{
	  	alert("voted successfully");
	  }})

}

function candidatethree() {
	//this function if for firstcandidate
	var name = document.getElementById('candidate3name').textContent;
	var unique1 = 3;

	var url = "http://localhost/vote/php/vote.php?vote="+reg_number+"&cand="+name+"&id="+unique1;


	fetch(url)
	  .then(response => response.json())
	  .then(data => {
	  	if (data.description == "isexist") {
	  	alert("You have voted already");
	  }else{
	  	alert("voted successfully");
	  }})

}