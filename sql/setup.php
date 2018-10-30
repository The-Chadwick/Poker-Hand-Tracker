<?php
// setup.php

include_once("../includes/dbconnect.INC.php");

if(createTable("users", "id int(11) NOT NULL AUTO_INCREMENT, forename VARCHAR(32) NOT NULL,	surname VARCHAR(32) NOT NULL, email VARCHAR(50) NOT NULL UNIQUE, registerDate DATETIME NOT NULL, userPass VARCHAR(32) NOT NULL,	PRIMARY KEY (id)")) {
	echo "Successfully created Users Table<br/><br/>";
} else {
	echo "Something went horribly wrong!";
}

//if(insertAssociative("users", array("forename"=>"Brandon", "surname"=>"Walker", "email"=>"lyshine@live.com", "userPass"=>"Ihatemypage2!"))) echo "Successfully Entered Test Brandon!";

?>