<?php 
	// define("DB_SERVER", "localhost");
	// define("DB_USER", "homepage80439v2");
	// define("DB_PASS", "Ab3kch8a!");
	// define("DB_NAME", "homepage80439v2");

// Local Testing
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASS", "");
	define("DB_NAME", "homepage80439v2");

$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
// Test if connection occured
if(mysqli_connect_errno()) {
	die("Datebase connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")" ); }
 ?>









 


<!-- local -->
<?php
// $connect_error = 'Sorry, there seems to be a connection problem. I think the Internet just hiccuped. Please try again.';
// mysql_connect('localhost', 'root', '') or die($connect_error);
// mysql_select_db('homepage80439v2') or die($connect_error);

?>


<!-- remote -->
<?php
// $connect_error = 'Sorry, there seems to be a connection problem. I think the Internet just hiccuped. Please try again.';
// mysql_connect('localhost', 'homepage80439v2', 'Ab3kch8a!') or die($connect_error);
// mysql_select_db('homepage80439v2') or die($connect_error);

?>





