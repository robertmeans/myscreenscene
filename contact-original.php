<?php 
ob_start(); // just added this 10.26.15 (stackoverflow.com) to get header contact.php?sent to post whereas it wasn't before.
include 'core/init.php';
protect_page();
include 'includes/overall/header.php'; 
?>

<?php
if (empty($_POST) === false) {
	$errors = array();
	
	$name 		= $user_data['first_name'];
	$email 		= $_POST['email'];
	$message 	= $_POST['message'];
	
	if (empty($name) === true || empty($email) === true || empty($message) === true) {
		$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Speak up, I can\'t hear you! ...You\'ve got to type a message. :) </span>';
	} else {
		if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			$erors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">That is not a valid email address.</span>';
		}
	}
	if (empty($errors) === true) {
	mail('admin@myscreenscene.com', 'MyScreenScene - Member Contact', $message, 'From: ' . $email);
	header('Location: contact.php?sent');
	exit();	
	}
}
?>

<div id="home">

<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
<h1>Email Bob</h1>
<p>Hey <?php echo $user_data['first_name']; ?>,</p>
	<?php
	if (isset($_GET['sent']) === true) {
		echo '<p>Your message was sent successfully. I will see it soon.</p>';
	} else {
		
	if (empty($errors) === false) {
		echo '<ul>';
		foreach($errors as $error) {
			echo '<li>', $error, '</li>';	
		}
		echo '</ul>';
	}
	?>
    
<p>What's up?</p>
<form action="" method="post">
	<input type="hidden" name="email" size="30" value="<?php echo ($user_data['email']); ?>">
    Message<br />
    <textarea name="message" style="width:590px; height:100px;" wrap="soft"><?php if (isset($_POST['message']) === true) { echo strip_tags($_POST['message']);} ?></textarea><br />
    <img src="images/spacer.gif" border="0" width="1" height="5"><br />
    <input type="submit" value="Send" />   
</form>
    <?php
	}
	?>

<?php include 'includes/overall/footer.php'; ?>