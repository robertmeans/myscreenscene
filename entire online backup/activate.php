<?php 
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php';

if (isset($_GET['success']) === true && empty($_GET['success']) === true) { 
?>
<div id="home">
<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
	<h2>Thanks, your account has been activated</h2>
    <p>You are free to log in!</p> 
<?php
} else if (isset($_GET['email'], $_GET['email_code']) === true) {
	$email 		= trim($_GET['email']);
	$email_code	= trim($_GET['email_code']);
	
	if (email_exists($email) === false) {
		$errors[] = 'Oops, something went wrong. I don\'t see that email address. Are you up to shennanigans? I\'m a computer and rarely make mistakes unless there\'s been a glitch in the Matrix. Morpheus, is that you?';
	} else if (activate($email, $email_code) === false) {
		$errors[] = 'It appears you clicked on your activation link within your email again otherwise there has been a very unusual string of events that has led to you seeing this message. I\'m baffled. "Baffle" - that\'s a funny word.<br /><br />At any rate, please type in your login information above and see if everything worked yet somehow you still ended up seeing this.';
	}
	
	if (empty($errors) === false) {
	?>
    	<div id="home">
    	<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
    	<h2>Oops...</h2>
    <?php
		echo output_errors($errors);
		echo '</div><!-- home -->';
	} else {
		header ('Location: activate.php?success');
		exit();	
	}
	
	
} else {
	// someone trying to access activate unnecessarily - may want to put a custom message here instead of index.php 
	header('Location: whoa.php');
	exit();
}
?>

</div>
<?php
include 'includes/overall/footer.php'; 
?>