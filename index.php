<?php
include_once("config.php");
include_once("header.php");

session_start();
// If the user is not logged in
if(!isset($_SESSION[user])){
	header( "Location: $hostname$webroot/login.php" );
}
?>


<h1>Multiple Selection with the Keyboard</h1>
<h2>Adding a Line</h2>

To add the line above or below to the selection, use Ctl+Alt+Up and Ctrl+Alt+down (OS X: Ctrl+Shift+Up and Ctrl+Shift+Down).

If you go too far, use Undo Selection (Ctrl+U, or Command+U on OS X) to step backwards.
<h2>Splitting the Selection into Lines</h2>

Select a block of lines, and then split it into many selections, one per line, using Ctrl+Shift+L, or Command+Shift+L on OS X.
<h2>Quick Add Next</h2>

To add the next occurrence of the current word to the selection, use Quick Add Next, which is bound to Ctrl+D on Windows and Linux, or Command+D on OS X.

Again, if you go too far, use Undo Selection (Ctrl+U, or Command+U on OS X) to step backwards.
<h2>Find All</h2>

To add all occurrences of the current word to the selection, use Find All: Alt+F3 on Windows and Linux, or Ctrl+Command+G on OS X.
Single Selection

To go from multiple selections to a single selection, press Escape. 


<?php

include_once("footer.php");