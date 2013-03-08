<?php
include_once("config.php");
include_once("tiny_box_header.php");

if($allow_registration){
	// Blank = success
	$error_message = "";

	if(isset($_POST[pass]) && isset($_POST[user]) && isset($_POST[email])){
		$user = $_POST[user];
		$pass = $_POST[pass];
		$email = $_POST[email];
		
		// If any of the items are blank
		if($_POST[user]=='' || $_POST[pass]=='' || $_POST[email]=''){
			$error_message .= "You must complete all fields.<br />";
		}

		if(preg_match("^[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9]@[a-z0-9][a-z0-9_\.-]{0,}[a-z0-9][\.][a-z0-9]{2,4}$"
			, $_POST[email]) == true){
			$error_message .= "Email incorrect.<br />";
		}

		$db = new SQLite3($dbfile);
		$statement = $db->prepare("select * from accounts where user=:user");
		$statement->bindParam(":user", $user);
		$result = $statement->execute();
		$var = $result->fetchArray();

		if($var){
			$error_message .= "Username taken.<br />";
		}

		if($error_message == ""){
			//$result = $db->exec("INSERT INTO accounts(user, password, email) VALUES ('$user', '$pass', '$email')");
			$statement = $db->prepare("INSERT INTO accounts(user, password, email) VALUES (:user, :pass, :email)");
			$statement->bindParam(":user", $user);
			$statement->bindParam(":pass", $pass);
			$statement->bindParam(":email", $email);
			$result = $statement->execute();
		
			header( "Location: login.php" );
		}
	}

	echo '<form action="register.php" method="post">
				<p class="title">Register</p> <br />';
				echo 'Username: <input type="text" name="user" class="textInput"><br />
				Password: <input type="password" name="pass" class="textInput"><br />
				Email: <input type="text" name="email" class="textInput"><br />';
				if($error_message != ""){ echo "<p class=\"fail\">$error_message</p>"; }
				echo '<input type="submit" value="Register" class="loginButton">
		 </form>';
}else{
	echo 'Registration has been disabled, <br /> <a href="login.php">Return to Login</a>';
}

include_once("tiny_box_footer.php");
