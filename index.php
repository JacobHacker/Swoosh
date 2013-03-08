<?php
include_once("config.php");
include_once("header.php");

session_start();
// If the user is not logged in
if(!isset($_SESSION[user])){
	header( "Location: $hostname$webroot/login.php" );
}
?>




Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus tempus ipsum id quam mattis interdum. Curabitur ornare risus in sem molestie semper. Ut luctus diam sit amet mauris ornare et dictum libero porta. Ut dolor felis, dapibus et tincidunt vitae, imperdiet a ligula. Cras magna quam, accumsan id volutpat vitae, pretium vel metus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Cras vitae sem id mauris ultrices congue. Nam volutpat risus in velit eleifend congue. Donec sit amet nisl lorem, eget ultrices velit. Morbi sollicitudin dictum mauris vel feugiat. Duis volutpat vulputate euismod. Nullam venenatis sapien condimentum mauris faucibus accumsan. Ut eu sem facilisis dui rhoncus porttitor. Quisque eu turpis eu eros feugiat aliquet.

Nullam eget nunc nulla. Quisque malesuada sodales arcu, et ullamcorper metus volutpat at. Fusce vitae ligula mauris, eget laoreet nisl. Morbi quis consequat metus. Duis viverra interdum tortor ut porta. Mauris vitae elit ac nunc egestas bibendum sed vulputate justo. Nullam consectetur sollicitudin urna, rutrum elementum libero posuere ac. Nullam id tortor vitae augue feugiat iaculis at non arcu. Etiam feugiat neque sit amet sem laoreet eu aliquam leo auctor. Nullam vel felis augue. Ut arcu velit, ullamcorper nec fringilla non, interdum sed nunc.

Vestibulum pharetra ante ut quam accumsan hendrerit. Sed elit arcu, hendrerit a scelerisque vitae, porttitor ac ligula. Vivamus hendrerit tellus et sem mattis at porttitor mauris hendrerit. Nulla mollis arcu nec nibh tristique et hendrerit est blandit. Suspendisse potenti. Nam leo sapien, porttitor porttitor gravida ac, lobortis at metus. Maecenas euismod ultrices tincidunt. Nulla semper mi eu magna tincidunt sed pharetra orci fringilla. Donec suscipit, urna in dictum posuere, leo enim faucibus orci, facilisis dignissim sapien dui ut leo. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; In viverra semper augue, id luctus sem blandit in. Curabitur eleifend neque quis nunc lacinia luctus. Praesent lacinia ligula ut massa facilisis accumsan. Praesent tempus metus elit, in elementum mauris.

Quisque lorem neque, dictum ut auctor sed, faucibus sed lorem. Nullam consectetur laoreet malesuada. Suspendisse in nisi mauris. Vestibulum sodales gravida sagittis. Aenean sagittis sapien sed diam adipiscing in ornare orci volutpat. Nunc id magna lorem, sed condimentum arcu. Proin id consequat lorem. Nulla scelerisque, enim sed tincidunt varius, magna nisl mattis nibh, eu fermentum neque est eget nibh. Curabitur in luctus lorem. Aliquam neque dui, venenatis sed scelerisque hendrerit, tempor ut augue. Cras tincidunt, leo luctus gravida semper, nibh nisi lacinia tortor, et vulputate odio ante vitae nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ac ante eget ante mattis feugiat. Donec lacinia velit et leo scelerisque convallis ac sed nisl. Morbi lobortis libero nec sapien viverra semper. Nulla luctus semper nulla, non sollicitudin neque porta et.

Curabitur id risus quam, et lobortis massa. Maecenas tempus orci id lorem porttitor ullamcorper. Nunc luctus imperdiet nisl a volutpat. Donec aliquam elementum fringilla. Maecenas sagittis tincidunt erat, vel adipiscing mauris pharetra in. Nulla malesuada mi lorem, nec euismod diam. Donec aliquam sapien eget ligula hendrerit suscipit. Donec condimentum vulputate augue. Proin laoreet augue sed justo placerat blandit. Proin eleifend, lacus nec lacinia euismod, dui massa suscipit velit, at condimentum sapien felis nec purus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur vestibulum dignissim consequat. Nunc vitae mi vitae libero viverra porttitor. 


<?php

include_once("footer.php");