<?php 
include '../core/init.php';
protect_page();
include '../includes/overall/header_edit_mode.php'; 

?>

<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo '<img src="images/spacer.gif" border="0" width="270" height="1">Your links have been updated!';
} else {
if (empty($_POST) === false && empty($errors) === true) {
	
  $clock_name = $_POST['clock4_name'];
    if (!strlen(trim($clock_name))) {
    $clock_name = 'x';
  }  
	$update_data = array(
		'clock4_name' 	=> $clock_name,
		'clock4_zone' 	=> $_POST['clock4_zone'],
	
	);
	
	update_user($session_user_id, $update_data);
	header('Location: ../edit_mode.php');
	exit();
	
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
	?>

<?php
}
include '../includes/overall/footer.php'; 
?>