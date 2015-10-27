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

  $url = $_POST['b3_url_pg2'];
  if (!preg_match('#^[a-zA-Z]+://#', $url)) {
    //No current protocol - add http
    $url = 'http://' . $url;
  }
  $text = $_POST['b3_text_pg2'];
  if (!strlen(trim($text))) {
    $text = 'x';
  }  
  $update_data = array(
      'b3_url_pg2'    => $url,
      'b3_text_pg2'   => $text,
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