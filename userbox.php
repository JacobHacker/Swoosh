<?php
session_start();

	if(isset($_SESSION[user])){ ?>
	<div id="userbox">
		<?php echo "Welcome, $_SESSION[user] <a href=\"$hostname$webroot/login.php?logout\">(logout)</a>";?>
	</div>

	<?php } ?>