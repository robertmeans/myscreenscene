<html><!-- 0422131201 -->
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
// to manage color_scheme changes are needed here and in includes/overall/header_edit_mode.php.
// must keep both files b/c the processing scripts resend the visitor to includes/overall/header_edit_mode.php
// where the necessary header information that corresponds to the selected color scheme is printed along
// with a generic body tag. the next php on THIS page (right below this block) writes the specific
// body tag corresponding to the topmost row. I don't want the fields to work in edit_mode. that's why
// they are kept seperate.
	if ($user_data['color_scheme'] == "slate") { 
	include 'includes/head_edit_mode_slate.php';
	} else if ($user_data['color_scheme'] == "spring"){
		include 'includes/head_edit_mode_spring.php';
	} else if ($user_data['color_scheme'] == "sofa"){
		include 'includes/head_edit_mode_sofa.php';
	} else {
		
		
	// leave the else statement to account for index.php
	// it just uses the .css for formatting welcome.php
	// and login.php. everything above can drive the
	// color scheme.
	include 'includes/head_slate.php';	
	}
?>
<?php
// this prints the functional body tag for the specific row that will appear in 1st posisition.
	if ($user_data['url'] == "row1") { 
	include 'url_header.php'; 
	} else if ($user_data['bing'] == "row1") { 
	include 'bing_header.php'; 
	} else if ($user_data['google'] == "row1") { 
	include 'google_header.php'; 
	} else if ($user_data['reference'] == "row1") { 
	include 'reference_header.php'; 
	} else { 
	include 'youtube_header.php'; 
	}
?>
<?php include 'includes/header.php'; ?>
    
    