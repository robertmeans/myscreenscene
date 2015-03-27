<?php
session_start();
// error_reporting(0);
require 'database/connect.php';
require 'functions/general.php';
require 'functions/users.php';

$current_file = explode('/', $_SERVER['SCRIPT_NAME']);
$current_file = end($current_file);

if (logged_in() === true) {
	$session_user_id = $_SESSION['user_id'];
	$user_data = user_data($session_user_id, 
	'user_id', 
	'username', 
	'password', 
	'first_name', 
	'last_name', 
	'email', 
	'password_recover', 
	'profile', 
	'type', 
	'allow_email', 
	'color_scheme', 
	'clock1_name',
	'clock1_zone',
	'clock2_name',
	'clock2_zone',
	'clock3_name',
	'clock3_zone',
	'clock4_name',
	'clock4_zone', 
	'clock_hours', 
	'url', 
	'bing', 
	'google', 
	'reference', 
	'youtube', 
	'reference_swap', 
	'page_number',
	'a1_url', 'a1_text',
	'b1_url', 'b1_text',
	'c1_url', 'c1_text',
	'd1_url', 'd1_text',
	'a2_url', 'a2_text', 
	'b2_url', 'b2_text',
 	'c2_url', 'c2_text',
	'd2_url', 'd2_text',
	'a3_url', 'a3_text',
	'b3_url', 'b3_text',
	'c3_url', 'c3_text',
	'd3_url', 'd3_text',
	'a4_url', 'a4_text', 
	'b4_url', 'b4_text',
	'c4_url', 'c4_text',
	'd4_url', 'd4_text',
	'a5_url', 'a5_text', 
	'b5_url', 'b5_text',
	'c5_url', 'c5_text',
	'd5_url', 'd5_text',
	'a6_url', 'a6_text',
	'b6_url', 'b6_text', 
	'c6_url', 'c6_text',
	'd6_url', 'd6_text');
	if (user_active($user_data['username']) === false) {
		session_destroy();
		header('Location: /');
		exit();
	}
	if ($current_file !== 'changepassword.php' && $current_file !== 'logout.php' && $user_data['password_recover'] == 1) {
		header('Location: changepassword.php?force');
		exit();
	}
}

$errors = array();
?>