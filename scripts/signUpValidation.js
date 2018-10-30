// JavaScript Document

function validateName(str) {
	if (str === "") return "No Name Was Entered";
	
	return "";
}

function validateEmail(str) {
	if (str === "") {
		return "No Email Was Entered";
	} else if (!/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(str)){
		return "No Valid Email Was Entered";
	}
	
	return "";
}

function validatePassword(str) {
	
}

function validateSignUp() {
	var fName, lName, mail, pass, passCheck;
	
	fName = document.getElementById("forename").value;
	lName = document.getElementById("surName").value;
	mail = document.getElementById("email").value;
	pass = document.getElementById("userPass").value;
	passCheck = document.getElementById("userPassCheck").value;
	
	
}