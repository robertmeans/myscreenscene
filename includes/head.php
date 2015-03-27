<!-- 0422131157 -->
<?php
// to turn on see:
// includes\overall\header.php
// includes\head.php
// includes\head_edit_mode.php
// includes\overall\footer.php
//
//$time = microtime();
//$time = explode(' ', $time);
//$time = $time[1] + $time[0];
//$start = $time;
?>
<?php
// to manage color_scheme changes are needed here and in includes/overall/header_edit_mode.php
	if ($user_data['color_scheme'] == "slate") { 
	include 'includes/head_edit_mode_slate.php';
	} else if ($user_data['color_scheme'] == "spring"){
		include 'includes/head_edit_mode_spring.php';
	} else {
	// leave the else statement to account for index.php
	// it just uses the .css for formatting welcome.php
	// and login.php. everything above can drive the
	// color scheme.
	include 'includes/head_slate.php';	
	}
?>