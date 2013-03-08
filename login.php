<?php

include_once("config.php");

session_start();

if (isset($_GET['logout'])) {
	unset($_SESSION[user]);
	session_unset();
	session_destroy();
	session_write_close();
    setcookie(session_name(),'',0,'/');
    session_regenerate_id(true);	
}

if (isset($_SESSION[user])) {
	$message="You're already logged in as $_SESSION[user].<br />";
}

if( isset( $_POST[user] ) && isset( $_POST[pass] ) ){
	$user = $_POST[user];
	$pass = $_POST[pass];

	$db = new SQLite3($dbfile);

	$statement = $db->prepare("select * from accounts where user=:user and password=:password");
	$statement->bindParam(":user", $user);
	$statement->bindParam(":password", $pass);
	$result = $statement->execute();
	$var = $result->fetchArray();

	if($var == false){
		$message = "Login Failure.";
	}else{
		$_SESSION[user] = $_POST[user];
		header( "Location: $hostname$webroot" );
	}
}

// This must be down here so the userbox does not get displayed
// when logging out.
include_once("tiny_box_header.php");

echo '<form action="login.php" method="post">
				<p class="title">Login</p> <br />';
				echo 'Username: <input type="text" name="user" class="textInput"><br />
				Password: <input type="password" name="pass" class="textInput"><br />';
				if($message!=''){ echo '<p class="fail">'.$message.'</p>'; }
				echo '<br /><input type="submit" value="Submit" class="loginButton">';
				if($allow_registration){
					echo '<a href="register.php" class="register">Register</a>';}
echo '</form>';



include_once("tiny_box_footer.php");
