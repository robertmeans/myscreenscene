<?php 
include 'core/init.php';
logged_in_redirect();
include 'includes/overall/header.php'; 
?>
<div id="home">
<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
<h1>Username Recovery</h1>
<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
?>
<p>Ok, I've emailed you your Username.</p>
<?php
} else {
	$mode_allowed = array('username', 'password');
	if (isset($_GET['mode']) === true && in_array($_GET['mode'], $mode_allowed) === true) {
		if (isset($_POST['email']) === true && empty($_POST['email']) === false) {
			if (email_exists($_POST['email']) === true) {
				recover($_GET['mode'], $_POST['email']);
				header('Location: recover.php?success');
			} else {
				  echo '<p>That email address does not exist within my records. Perhaps you used a different address or maybe you mistyped it just now? Would you like to <a class="dictionaryReverse" href="recover.php?mode=username">try again</a>?</p>';
				exit();
			}
		}
	?>
		<form action="" method="post">
			<ul>
				<li>
					Please enter your email address:<br />
					<input type="text" name="email" size="30" maxlength="1024" />
				</li>
                <img src="images/spacer.gif" border="0" width="1" height="10"><br />
				<li>
					<input type="submit" value="Recover" />
				</li>
			</ul>
		
		</form>
	<?php
	} else {
		header('Location: /');
		exit();	
	}
}
?>
</div>
<?php include 'includes/overall/footer.php'; ?>