<?php
session_start();

session_destroy();

setcookie("site_username", '', time()-(700*24*60*60)); // 30 days
				setcookie("site_password", '', time()-(700*24*60*60));
				setcookie("site_rememberme", '', time()-(700*24*60*60));

header('Location: /');

?>