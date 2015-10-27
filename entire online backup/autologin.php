<?php

/********** AUTO LOGIN STARTS *****************/
$cookie_site_username = @$_COOKIE['site_username'];
$cookie_site_password = base64_decode(@$_COOKIE['site_password']);
$cookie_site_rememberme = @$_COOKIE['site_rememberme'];


 if($cookie_site_username != '' && $_SESSION['user_id'] == '' )
{
		$login = login($cookie_site_username, $cookie_site_password);
  		if ($login === false) {
			$errors[] = 'That username/password combination is incorrect.';
		} else {
			$_SESSION['user_id'] = $login;
 			header('Location: /');
			exit();
		}
}

/*************** AUTO LOGIN ENDS *********************/

?>