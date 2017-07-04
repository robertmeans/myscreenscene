<?php
$connect_error = 'Sorry, there seems to be a connection problem. I think the Internet just hiccuped. Please try again.';
mysql_connect('localhost', 'homepage80439', 'Ab3kch8a!') or die($connect_error);
mysql_select_db('homepage80439') or die($connect_error);

?>