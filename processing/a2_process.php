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

  $url = $_POST['a2_url'];
  if (!preg_match('#^[a-zA-Z]+://#', $url)) {
    //No current protocol - add http
    $url = 'http://' . $url;
  }
  $text = $_POST['a2_text'];
  if (!strlen(trim($text))) {
  // if ($text == NULL) {
    $text = 'x';
  }  
  $update_data = array(
      'a2_url'    => $url,
      'a2_text'   => $text,
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