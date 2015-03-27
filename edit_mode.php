<?php 
include 'core/init.php';
protect_page();
?>
<?php

if (($user_data['page_number']) == 1) {	
	include 'edit_mode1.php';
} else if (($user_data['page_number']) == 2) { 
	include 'edit_mode2.php';
} else if (($user_data['page_number']) == 3) { 
	include 'edit_mode3.php';	
} 
?>