<?php 
include '../core/init.php';
protect_page();

?>
<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo '<img src="images/spacer.gif" border="0" width="270" height="1">Your links have been updated!';
} else {
if (empty($_POST) === false && empty($errors) === true) {
	
	$update_data = array(	
		'clock_hours' 		=> $_POST['clock_hours'],
		'clock1_name'		=> $_POST['clock1_name'],
		'clock1_zone'		=> $_POST['clock1_zone'],
		'clock2_name'		=> $_POST['clock2_name'],
		'clock2_zone'		=> $_POST['clock2_zone'],
		'clock3_name'		=> $_POST['clock3_name'],
		'clock3_zone'		=> $_POST['clock3_zone'],
		'clock4_name'		=> $_POST['clock4_name'],
		'clock4_zone'		=> $_POST['clock4_zone'],
		
		'a1_text' 	=> $_POST['a1_text'],
		'b1_text'	=> $_POST['b1_text'],
		'c1_text'	=> $_POST['c1_text'],
		'd1_text'	=> $_POST['d1_text'],
		'a2_text' 	=> $_POST['a2_text'],
		'b2_text'	=> $_POST['b2_text'],
		'c2_text'	=> $_POST['c2_text'],
		'd2_text'	=> $_POST['d2_text'],
		'a3_text' 	=> $_POST['a3_text'],
		'b3_text'	=> $_POST['b3_text'],
		'c3_text'	=> $_POST['c3_text'],
		'd3_text'	=> $_POST['d3_text'],
		'a4_text' 	=> $_POST['a4_text'],
		'b4_text'	=> $_POST['b4_text'],
		'c4_text'	=> $_POST['c4_text'],
		'd4_text'	=> $_POST['d4_text'],
		'a5_text' 	=> $_POST['a5_text'],
		'b5_text'	=> $_POST['b5_text'],
		'c5_text'	=> $_POST['c5_text'],
		'd5_text'	=> $_POST['d5_text'],
		'a6_text' 	=> $_POST['a6_text'],
		'b6_text'	=> $_POST['b6_text'],
		'c6_text'	=> $_POST['c6_text'],
		'd6_text'	=> $_POST['d6_text'],	
	);
	
	update_user($session_user_id, $update_data);
	header('Location: ../index.php');
	exit();
	
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
}
	?>