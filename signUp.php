<?php

include_once "includes/dbconnect.INC.php";

?>
<form name="userSignUp" method="post" onsubmit="return validateForm()" action="signup.INC.php">
	<fieldset>
		<legend>Sign Up</legend>
		<label for="forename">First Name:</label><input id="forename" type="text" maxlength="20" pattern="[a-zA-Z]{3,20}" required />
		<label for="lastname">Last Name:</label><input id="surname" type="text" maxlength="20" pattern="[a-zA-Z]{3,20}" required />
		<!--<label for="email">Email:</label><input id="email" type="email" maxlength="254" pattern="" required />-->
		<label for="userPass">Pasword:</label><input id="userPass" type="password" maxlength="40" pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,}" required /><input id="userPassCheck" type="password" required />
		
		<input type="submit" />
	</fieldset>
</form>
<script type="text/javascript" src="scripts/signUpValidation.js"></script>
<?php

// server side validation

?>