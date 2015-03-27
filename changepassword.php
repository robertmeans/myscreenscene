<?php 
include 'core/init.php';
protect_page();

if (empty($_POST) === false) {
	$required_fields = array('current_password', 'password', 'password_again');
	foreach($_POST as $key=>$value) {
		if (empty($value) && in_array($key, $required_fields) === true) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Fields marked with an asterisk are required.</span>';
			break 1;
		}
	}
	if (md5($_POST['current_password']) === $user_data['password']) {
		if (trim($_POST['password']) !== trim($_POST['password_again'])) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Your new passwords do not match.</span>';
		} else if (strlen($_POST['password']) < 6) {
			$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Your password must be at least 6 characters.</span>';
		}
	} else {
		$errors[] = '<img src="images/redDot.gif" border="0" width="9" height="9"> <span class="errorText">Your current password is incorrect.</span>';	
	}
}

include 'includes/overall/header.php'; 
?>
<div id="home">
<img src="images/spacer.gif" border="0" width="1" height="10" /><br />
<h1>Change Password</h1>

<?php
if (isset($_GET['success']) === true && empty($_GET['success']) === true) {
	echo 'Your password has been changed';
} else  {
	if (isset($_GET['force']) === true && empty($_GET['force']) === true) {
	?>
		<p>You must change your password in order to proceed.</p>
	<?php
	}
	
	if (empty($_POST) === false && empty($errors) === true) {
		change_password($session_user_id, $_POST['password']);
		header('Location: changepassword.php?success');
	} else if (empty($errors) === false) {
		echo output_errors($errors);
	}
	?>
	
	<form action="" method="post">
	<ul>
		<li>Current password*:<br />
		<input type="password" name="current_password" size="30" maxlength="32">
		</li>
		<img src="images/spacer.gif" border="0" width="1" height="20"><br />
		<li>New password*:<br />
		<input type="password" name="password" size="30" maxlength="32">
		</li>
		<img src="images/spacer.gif" border="0" width="1" height="5"><br />
		<li>New password again*:<br />
		<input type="password" name="password_again" size="30" maxlength="32">
		</li>
		<img src="images/spacer.gif" border="0" width="1" height="10"><br />
		<li><input type="submit" value="Change password"></li>
		
	</ul>
	
	</form>
	</div>
<?php 
}
include 'includes/overall/footer.php'; 
?>