<?php 
include 'core/init.php';
include 'includes/overall/header.php'; 

if (isset($_GET['username']) === true && empty($_GET['username']) === false) {
	$username		= $_GET['username'];
	
	if (user_exists($username) === true) {
		$user_id		= user_id_from_username($username);
		$profile_data	= user_data($user_id, 'first_name', 'last_name', 'email');
	?>
    	<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
        <h1><?php echo $profile_data['first_name']; ?>'s Profile</h1>
        
    <?php
	} else {
		echo '<div id="home">Sorry, that user does not exist.</div>';	
	}
} else {
	header('Location: /');
	exit();
}

include 'includes/overall/footer.php'; ?>