<?php
//add records//
include '../core/init.php';
protect_page();
?>

<?php

if (empty($_POST) === false && empty($errors) === true) { 
// if url contains data add the necessary protocol if it does not already exist
if (($_POST['note_url']) != NULL) {
  $url = $_POST['note_url'];
  if (!preg_match('#^[a-zA-Z]+://#', $url)) {
    //No current protocol - add http
    $url = 'http://' . $url;
  }

	//$url	    	= addslashes(trim($_POST['note_url']));
	$label	     	= addslashes(trim($_POST['label']));
	$desc		 	= addslashes(trim($_POST['desc']));
    $userId      	= $_SESSION['user_id'];
	
	 $sqlfd ="select max(sort_order) as mx from dblist";//used to find the order
	 $exefd = mysql_query($sqlfd);
	 $resfd  = mysql_fetch_array($exefd);
	 $ord_val = $resfd['mx'];
	 $numfd    = mysql_num_rows($exefd);
	 if($numfd >0)
	   $sort_order =$ord_val +1;
	 else
	   $sort_order =1;
				   
    $insql = "insert into dblist (`userId`,`note_url`,`label`,`desc`,`sort_order`)  value('$userId','$url','$label','$desc','$sort_order')";//insert into db
    if(mysql_query($insql))
	   //$msg ="Details added successfully";
	
	header('Location:../');		
	exit();
	
	// if url is empty, leave it alone and post empty field
	} else if (($_POST['note_url']) == NULL) {
	$note_url	    = addslashes(trim($_POST['note_url']));
	$label	     	= addslashes(trim($_POST['label']));
	$desc		 	= addslashes(trim($_POST['desc']));
    $userId      	= $_SESSION['user_id'];
	
	 $sqlfd ="select max(sort_order) as mx from dblist";//used to find the order
	 $exefd = mysql_query($sqlfd);
	 $resfd  = mysql_fetch_array($exefd);
	 $ord_val = $resfd['mx'];
	 $numfd    = mysql_num_rows($exefd);
	 if($numfd >0)
	   $sort_order =$ord_val +1;
	 else
	   $sort_order =1;
				   
    $insql = "insert into dblist (`userId`,`note_url`,`label`,`desc`,`sort_order`)  value('$userId','$note_url','$label','$desc','$sort_order')";//insert into db
    if(mysql_query($insql))
	   //$msg ="Details added successfully";
	
	header('Location:../');		
	exit();
		
}
}
?>
