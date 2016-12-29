<?php
include 'core/init.php';
logged_in_redirect();

$cookie_site_username = @$_COOKIE['site_username'];
$cookie_site_password = base64_decode(@$_COOKIE['site_password']);
$cookie_site_rememberme = @$_COOKIE['site_rememberme'];


/********** AUTO LOGIN STARTS *****************/
if($cookie_site_username != '' && $cookie_site_password != '')
{
		$login = login($cookie_site_username, $cookie_site_password);
  		if ($login === false) {
			$errors[] = 'That username/password combination is incorrect.';
		} else {
			$_SESSION['user_id'] = $login;
 			header('Location: index.php');
			exit();
		}
}
/*************** AUTO LOGIN ENDS *********************/
if (empty($_POST) === false) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$rememberme = @$_POST['rememberme'];
	
	if (empty($username) === true || empty($password) === true) {
		$errors[] = 'You need to enter a username and password.';
	} else if (user_exists($username) === false) {
		$errors[] = 'I can\'t find that username. Have you registered?';
	} else if (user_active($username) === false) {
		$errors[] = 'You haven\'t activated your account!';
	} else {
		
		if (strlen($password) > 32) {
			$errors[] = 'Password is too long';	
		}
		
		$login = login($username, $password);
 
 		if ($login === false) {
			$errors[] = 'That username/password combination is incorrect.';
		} else {
			$_SESSION['user_id'] = $login;
			if($rememberme == '1')
			{
				setcookie("site_username", $username, time()+(700*24*60*60)); // 700 days
				$site_password = base64_encode($password); 
				setcookie("site_password", $site_password, time()+(700*24*60*60));
				setcookie("site_rememberme", $rememberme, time()+(700*24*60*60));
			}
			else
			{
				setcookie("site_username", '', time()+(700*24*60*60)); // 700 days
				setcookie("site_password", '', time()+(700*24*60*60));
				setcookie("site_rememberme", '', time()+(700*24*60*60));
			}

			header('Location: index.php');
			exit();
		}
	}	
} else {
	$errors[] = 'No data received.';
}
include 'includes/overall/header.php';
if (empty($errors) === false) {
?>
	<div id="home">
	<h2>I tried to log you in, but...</h2>
<?php
	echo output_errors($errors);
}
include 'includes/overall/footer.php';
?>