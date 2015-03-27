<html><!-- 0422131200 -->
<?php
// to manage color_scheme changes are needed here and in includes/head.php. you have to keep this file
// because otherwise the row information intended for the homepage would get printed on the edit_mode page
// and that would make the functionality of the row available.
 	if ($user_data['color_scheme'] == "slate") {
		include 'includes/head_edit_mode_slate.php';
	} else if ($user_data['color_scheme'] == "spring"){
		include 'includes/head_edit_mode_spring.php';
	} else if ($user_data['color_scheme'] == "sofa"){
		include 'includes/head_edit_mode_sofa.php';
	} 
?>
<body onLoad="clearForms();"><!-- 0422131716 -->
<?php include 'includes/header.php'; ?>

    
    