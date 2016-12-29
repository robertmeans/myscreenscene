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
	 
	'a1_url', 'a1_url_pg2', 'a1_url_pg3', 'a1_text', 'a1_text_pg2', 'a1_text_pg3', 
	'b1_url', 'b1_url_pg2', 'b1_url_pg3', 'b1_text', 'b1_text_pg2', 'b1_text_pg3', 
	'c1_url', 'c1_url_pg2', 'c1_url_pg3', 'c1_text', 'c1_text_pg2', 'c1_text_pg3', 
	'd1_url', 'd1_url_pg2', 'd1_url_pg3', 'd1_text', 'd1_text_pg2', 'd1_text_pg3',
	
	'a2_url', 'a2_url_pg2', 'a2_url_pg3', 'a2_text', 'a2_text_pg2', 'a2_text_pg3', 
	'b2_url', 'b2_url_pg2', 'b2_url_pg3', 'b2_text', 'b2_text_pg2', 'b2_text_pg3',
 	'c2_url', 'c2_url_pg2', 'c2_url_pg3', 'c2_text', 'c2_text_pg2', 'c2_text_pg3', 
	'd2_url', 'd2_url_pg2', 'd2_url_pg3', 'd2_text', 'd2_text_pg2', 'd2_text_pg3',
	 
	'a3_url', 'a3_url_pg2', 'a3_url_pg3', 'a3_text', 'a3_text_pg2', 'a3_text_pg3', 
	'b3_url', 'b3_url_pg2', 'b3_url_pg3', 'b3_text', 'b3_text_pg2', 'b3_text_pg3', 
	'c3_url', 'c3_url_pg2', 'c3_url_pg3', 'c3_text', 'c3_text_pg2', 'c3_text_pg3',
	'd3_url', 'd3_url_pg2', 'd3_url_pg3', 'd3_text', 'd3_text_pg2', 'd3_text_pg3',
	 
	'a4_url', 'a4_url_pg2', 'a4_url_pg3', 'a4_text', 'a4_text_pg2', 'a4_text_pg3', 
	'b4_url', 'b4_url_pg2', 'b4_url_pg3', 'b4_text', 'b4_text_pg2', 'b4_text_pg3', 
	'c4_url', 'c4_url_pg2', 'c4_url_pg3', 'c4_text', 'c4_text_pg2', 'c4_text_pg3', 
	'd4_url', 'd4_url_pg2', 'd4_url_pg3', 'd4_text', 'd4_text_pg2', 'd4_text_pg3',
	 
	'a5_url', 'a5_url_pg2', 'a5_url_pg3', 'a5_text', 'a5_text_pg2', 'a5_text_pg3', 
	'b5_url', 'b5_url_pg2', 'b5_url_pg3', 'b5_text', 'b5_text_pg2', 'b5_text_pg3',
	'c5_url', 'c5_url_pg2', 'c5_url_pg3', 'c5_text', 'c5_text_pg2', 'c5_text_pg3', 
	'd5_url', 'd5_url_pg2', 'd5_url_pg3', 'd5_text', 'd5_text_pg2', 'd5_text_pg3',
	 
	'a6_url', 'a6_url_pg2', 'a6_url_pg3', 'a6_text', 'a6_text_pg2', 'a6_text_pg3', 
	'b6_url', 'b6_url_pg2', 'b6_url_pg3', 'b6_text', 'b6_text_pg2', 'b6_text_pg3', 
	'c6_url', 'c6_url_pg2', 'c6_url_pg3', 'c6_text', 'c6_text_pg2', 'c6_text_pg3', 
	'd6_url', 'd6_url_pg2', 'd6_url_pg3', 'd6_text', 'd6_text_pg2', 'd6_text_pg3');
	if (user_active($user_data['username']) === false) {
		session_destroy();
		header('Location: index.php');
		exit();
	}
	if ($current_file !== 'changepassword.php' && $current_file !== 'logout.php' && $user_data['password_recover'] == 1) {
		header('Location: changepassword.php?force');
		exit();
	}
}

$errors = array();
?>