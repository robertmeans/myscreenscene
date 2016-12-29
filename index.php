<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

  ?>

  
<?php 
include 'core/init.php';
include 'includes/overall/header.php'; 
include 'autologin.php';
?>
<div id="home">
<?php
	$user_count = user_count();
	$suffix = ($user_count != 1) ? 's' : '';


if ((has_access($session_user_id, 1) === true) && (($user_data['page_number']) == 1)) {	
	include 'homepage.php';
	include 'admin_info.php';
} else if ((has_access($session_user_id, 1) === true) && (($user_data['page_number']) == 2)) { 
	include 'homepage2.php';
	include 'admin_info.php';
} else if ((has_access($session_user_id, 1) === true) && (($user_data['page_number']) == 3)) { 
	include 'homepage3.php';
	include 'admin_info.php';	
	
	
} else if ((has_access($session_user_id, 2) === true) && (($user_data['page_number']) == 1)) {
	include 'homepage.php';
} else if ((has_access($session_user_id, 2) === true) && (($user_data['page_number']) == 2)) {
	include 'homepage2.php';
} else if ((has_access($session_user_id, 2) === true) && (($user_data['page_number']) == 3)) {
	include 'homepage3.php';		
	
	
} else {
	include 'welcome_msg.php';
} 
?>
<?php include 'includes/overall/footer.php'; ?>