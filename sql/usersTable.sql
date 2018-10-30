<?php

createTable("users", "id int(11) NOT NULL AUTO_INCREMENT, forename VARCHAR(32) NOT NULL,	surname VARCHAR(32) NOT NULL, email VARCHAR(50) NOT NULL UNIQUE, registerDate DATETIME NOT NULL, password VARCHAR(32) NOT NULL,	PRIMARY KEY (email)")

?>