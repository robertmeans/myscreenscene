<?php 
include 'core/init1.php';
protect_page();

	 if($_REQUEST["msg"]!='')
	    $msg = $_REQUEST["msg"];
	 
	 $sqlfd ="select min(sort_order) as min from dblist";//used to find the order
	 $exefd = mysql_query($sqlfd);
	 $resfd  = mysql_fetch_array($exefd);
	 $min_ord_val = $resfd['min'];
	 	
	 $sqlfd ="select max(sort_order) as mx from dblist";//used to find the order
	 $exefd = mysql_query($sqlfd);
	 $resfd  = mysql_fetch_array($exefd);
	 $ord_val = $resfd['mx'];
	 $max_ord_val = $resfd['mx'];
	 $numfd    = mysql_num_rows($exefd);
	 if($numfd >0)
	   $sort_order =$ord_val +1;
	 else
	   $sort_order =1;
	   	
	 $sql = "SELECT * FROM dblist WHERE sort_order=0";
	 $exefd = mysql_query($sql);
	 while($resfd  = mysql_fetch_assoc($exefd))
	 {
		$sql1 = "UPDATE dblist SET sort_order = '".$sort_order."' where dbId='".$resfd["dbId"]."'";
		$exefd = mysql_query($sql1);
		$sort_order++;
	 }
	 if($_REQUEST["pos"]=='up')
	 {
		 $sql = "SELECT * FROM dblist WHERE dbId='".$_REQUEST["id"]."'";
		 $exefd = mysql_query($sql);
		 $resfd  = mysql_fetch_assoc($exefd);
		 if($resfd["sort_order"]>$min_ord_val)
		 {
			 $sql = "SELECT * FROM dblist WHERE sort_order='".($resfd["sort_order"]-1)."'";
			 $exefd = mysql_query($sql);
			 $resfd1  = mysql_fetch_assoc($exefd);
			 
			 $sql1 = "UPDATE dblist SET sort_order = '".$resfd1["sort_order"]."' where dbId='".$_REQUEST["id"]."'";
			 $exefd = mysql_query($sql1);
			 $sql2 = "UPDATE dblist SET sort_order = '".$resfd["sort_order"]."' where dbId='".$resfd1["dbId"]."'";
			 $exefd = mysql_query($sql2);
			 
			 //$msg = 'Record Order Updated Successfully';
		 }
	 }
	 if($_REQUEST["pos"]=='dn')
	 {
		 $sql = "SELECT * FROM dblist WHERE dbId='".$_REQUEST["id"]."'";
		 $exefd = mysql_query($sql);
		 $resfd  = mysql_fetch_assoc($exefd);
		 if($resfd["sort_order"]<$max_ord_val)
		 {
		 $sql = "SELECT * FROM dblist WHERE sort_order='".($resfd["sort_order"]+1)."'";
		 $exefd = mysql_query($sql);
		 $resfd1  = mysql_fetch_assoc($exefd);
		 
		 $sql1 = "UPDATE dblist SET sort_order = '".$resfd1["sort_order"]."' where dbId='".$_REQUEST["id"]."'";
		 $exefd = mysql_query($sql1);
		 $sql2 = "UPDATE dblist SET sort_order = '".$resfd["sort_order"]."' where dbId='".$resfd1["dbId"]."'";
		 $exefd = mysql_query($sql2);
		 //$msg = 'Record Order Updated Successfully';
		 }
	 }
	 if($_REQUEST["action"]=='delete')
	 {
		 $sql = "DELETE FROM dblist WHERE dbId='".$_REQUEST["id"]."'";
		 $exefd = mysql_query($sql);
		 //$msg = 'Record Deleted Successfully';
	 }
	 $sqlfd ="select max(sort_order) as mx from dblist";//used to find the order
	 $exefd = mysql_query($sqlfd);
	 $resfd  = mysql_fetch_array($exefd);
	 $ord_val = $resfd['mx'];
	 $numfd    = mysql_num_rows($exefd);
	 if($numfd >0)
	   $sort_order =$ord_val +1;
	 else
	   $sort_order =1;
	   	
	 $sql = "SELECT * FROM dblist WHERE sort_order=0";
	 $exefd = mysql_query($sql);
	 while($resfd  = mysql_fetch_assoc($exefd))
	 {
		$sql1 = "UPDATE dblist SET sort_order = '".$sort_order."' where dbId='".$resfd["dbId"]."'";
		$exefd = mysql_query($sql1);
		$sort_order++;
	 }

?>

<div id="page_select_home">
<div class="page_nav_selected">1</div><!-- page_nav_selected -->

<form class="searchform" name="page_number2" action="processing/page_number.php" method="post">
<input type="hidden" name="page_number" value="2">

<a href="javascript:document.page_number2.submit();" class="page_nav">2</a>
</form>

<form class="searchform" name="page_number3" action="processing/page_number.php" method="post">
<input type="hidden" name="page_number" value="3">

<a href="javascript:document.page_number3.submit();" class="page_nav">3</a>
</form>

</div><!-- page_select_home -->

<div id="clockTopPad">&nbsp;</div>
<!-- clockTopPad --> 
<!-- clock names start -->
<div id="clock1_name_homepage">
  <?php 
	if (($user_data['clock1_name']) == "x") {
		echo '&nbsp;';
	} else {
		echo $user_data['clock1_name']; 
	}
?>
</div>
<!-- clock1_name -->

<div id="clock2_name_homepage">
  <?php 
	if (($user_data['clock2_name']) == "x") {
		echo '&nbsp;';
	} else {
		echo $user_data['clock2_name']; 
	}
?>
</div>
<!-- clock2_name -->

<div id="clock3_name_homepage">
  <?php 
	if (($user_data['clock3_name']) == "x") {
		echo '&nbsp;';
	} else {
		echo $user_data['clock3_name']; 
	}
?>
</div>
<!-- clock3_name -->

<div id="clock4_name_homepage">
  <?php 
	if (($user_data['clock4_name']) == "x") {
		echo '&nbsp;';
	} else {
		echo $user_data['clock4_name']; 
	}
?>
</div>
<!-- clock4_name --> 
<!-- clock names end --> 

<!-- clocks start -->
<div id="clock1">
  <?php
include 'scripts/clock1_homepage.php';
?>
</div>
<!-- clock1 -->

<div id="clock2">
  <?php
include 'scripts/clock2_homepage.php';
?>
</div>
<!-- clock2 -->

<div id="clock3">
  <?php
include 'scripts/clock3_homepage.php';
?>
</div>
<!-- clock3 -->

<div id="clock4">
  <?php
include 'scripts/clock4_homepage.php';
?>
</div>
<!-- clock4 --> 
<!-- clocks end -->
<div id="primary_row_01">
  <?php 
	if ($user_data['url'] == "row1") { 
		include 'row_order/urlBar_homepage.php'; 
	} else if ($user_data['bing'] == "row1") { 
		include 'row_order/bingBar_homepage.php'; 
	} else if ($user_data['google'] == "row1") { 
		include 'row_order/googleBar_homepage.php'; 
	} else if (($user_data['reference'] == "row1") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar_homepage.php'; 
	} else if (($user_data['reference'] == "row1") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBar_homepageSwap.php'; 
	} else { 
		include 'row_order/youtubeBar_homepage.php'; 
	} 
?>
</div>
<!-- primary_row_01 -->
<div id="primary_row_02">
  <?php 
	if ($user_data['url'] == "row2") { 
		include 'row_order/urlBar_homepage.php'; 
	} else if ($user_data['bing'] == "row2") { 
		include 'row_order/bingBar_homepage.php'; 
	} else if ($user_data['google'] == "row2") { 
		include 'row_order/googleBar_homepage.php'; 
	} else if (($user_data['reference'] == "row2") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar_homepage.php'; 
	} else if (($user_data['reference'] == "row2") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBar_homepageSwap.php'; 
	} else { 
		include 'row_order/youtubeBar_homepage.php'; 
	} 
?>
</div>
<!-- primary_row_02 -->
<div id="primary_row_03">
  <?php 
	if ($user_data['url'] == "row3") { 
		include 'row_order/urlBar_homepage.php'; 
	} else if ($user_data['bing'] == "row3") { 
		include 'row_order/bingBar_homepage.php'; 
	} else if ($user_data['google'] == "row3") { 
		include 'row_order/googleBar_homepage.php'; 
	} else if (($user_data['reference'] == "row3") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar_homepage.php'; 
	} else if (($user_data['reference'] == "row3") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBar_homepageSwap.php'; 
	} else { 
		include 'row_order/youtubeBar_homepage.php'; 
	} 
?>
</div>
<!-- primary_row_03 -->
<div id="primary_row_04">
  <?php 
	if ($user_data['url'] == "row4") { 
		include 'row_order/urlBar_homepage.php'; 
	} else if ($user_data['bing'] == "row4") { 
		include 'row_order/bingBar_homepage.php'; 
	} else if ($user_data['google'] == "row4") { 
		include 'row_order/googleBar_homepage.php'; 
	} else if (($user_data['reference'] == "row4") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar_homepage.php'; 
	} else if (($user_data['reference'] == "row4") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBar_homepageSwap.php'; 
	} else { 
		include 'row_order/youtubeBar_homepage.php'; 
	} 
?>
</div>
<!-- primary_row_04 -->
<div id="linkBoxWrapper">
  <?php 
	if ((($user_data['a1_text']) == 'x') && (($user_data['b1_text']) == 'x') && (($user_data['c1_text']) == 'x') && (($user_data['d1_text']) == 'x') && (($user_data['a2_text']) == 'x') && (($user_data['b2_text']) == 'x') && (($user_data['c2_text']) == 'x') && (($user_data['d2_text']) == 'x') && (($user_data['a3_text']) == 'x') && (($user_data['b3_text']) == 'x') && (($user_data['c3_text']) == 'x') && (($user_data['d3_text']) == 'x') && (($user_data['a4_text']) == 'x') && (($user_data['b4_text']) == 'x') && (($user_data['c4_text']) == 'x') && (($user_data['d4_text']) == 'x') && (($user_data['a5_text']) == 'x') && (($user_data['b5_text']) == 'x') && (($user_data['c5_text']) == 'x') && (($user_data['d5_text']) == 'x') && (($user_data['a6_text']) == 'x') && (($user_data['b6_text']) == 'x') && (($user_data['c6_text']) == 'x') && (($user_data['d6_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/top_spacer.php'; 
} 
?>
  <!-- ***************************************************** row 1 begin **************************************************** -->
  <?php 
	if ((($user_data['a1_text']) == 'x') && (($user_data['b1_text']) == 'x') && (($user_data['c1_text']) == 'x') && (($user_data['d1_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/link_row1.php'; 
} 
?>
  <!-- ****************************************************** row 1 end ***************************************************** --> 
  <!-- ****************************************************** row 2 begin *************************************************** -->
  <?php 
	if ((($user_data['a2_text']) == 'x') && (($user_data['b2_text']) == 'x') && (($user_data['c2_text']) == 'x') && (($user_data['d2_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/link_row2.php'; 
	} 
?>
  <!-- ****************************************************** row 2 end ***************************************************** --> 
  <!-- ****************************************************** row 3 begin *************************************************** -->
  <?php 
	if ((($user_data['a3_text']) == 'x') && (($user_data['b3_text']) == 'x') && (($user_data['c3_text']) == 'x') && (($user_data['d3_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/link_row3.php'; 
	} 
?>
  <!-- ****************************************************** row 3 end ***************************************************** --> 
  <!-- ****************************************************** row 4 begin *************************************************** -->
  <?php 
	if ((($user_data['a4_text']) == 'x') && (($user_data['b4_text']) == 'x') && (($user_data['c4_text']) == 'x') && (($user_data['d4_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/link_row4.php'; 
	} 
?>
  <!-- ****************************************************** row 4 end ***************************************************** --> 
  <!-- ****************************************************** row 5 begin *************************************************** -->
  <?php 
	if ((($user_data['a5_text']) == 'x') && (($user_data['b5_text']) == 'x') && (($user_data['c5_text']) == 'x') && (($user_data['d5_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/link_row5.php'; 
	} 
?>
  <!-- ****************************************************** row 5 end ***************************************************** --> 
  <!-- ****************************************************** row 6 begin *************************************************** -->
  <?php 
	if ((($user_data['a6_text']) == 'x') && (($user_data['b6_text']) == 'x') && (($user_data['c6_text']) == 'x') && (($user_data['d6_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/link_row6.php'; 
	} 
?>
  <!-- ****************************************************** row 6 end ***************************************************** --> 
</div>
<!-- linkBoxWrapper -->
<?php 
	if ((($user_data['a1_text']) == 'x') && (($user_data['b1_text']) == 'x') && (($user_data['c1_text']) == 'x') && (($user_data['d1_text']) == 'x') && (($user_data['a2_text']) == 'x') && (($user_data['b2_text']) == 'x') && (($user_data['c2_text']) == 'x') && (($user_data['d2_text']) == 'x') && (($user_data['a3_text']) == 'x') && (($user_data['b3_text']) == 'x') && (($user_data['c3_text']) == 'x') && (($user_data['d3_text']) == 'x') && (($user_data['a4_text']) == 'x') && (($user_data['b4_text']) == 'x') && (($user_data['c4_text']) == 'x') && (($user_data['d4_text']) == 'x') && (($user_data['a5_text']) == 'x') && (($user_data['b5_text']) == 'x') && (($user_data['c5_text']) == 'x') && (($user_data['d5_text']) == 'x') && (($user_data['a6_text']) == 'x') && (($user_data['b6_text']) == 'x') && (($user_data['c6_text']) == 'x') && (($user_data['d6_text']) == 'x')) { 
		include 'link_row_collapse/empty.php'; 
	} else { 
		include 'link_row_collapse/bottom_spacer.php'; 
}
?>
<div id="primary_row_05">
  <?php 
	if ($user_data['url'] == "row5") { 
		include 'row_order/urlBar_homepage.php'; 
	} else if ($user_data['bing'] == "row5") { 
		include 'row_order/bingBar_homepage.php'; 
	} else if ($user_data['google'] == "row5") { 
		include 'row_order/googleBar_homepage.php'; 
	} else if (($user_data['reference'] == "row5") && ($user_data['reference_swap'] == 1)) { 
		include 'row_order/referenceBar_homepage.php'; 
	} else if (($user_data['reference'] == "row5") && ($user_data['reference_swap'] == 2)) { 
		include 'row_order/referenceBar_homepageSwap.php'; 
	} else { 
		include 'row_order/youtubeBar_homepage.php'; 
	} 
?>
</div><!-- primary_row_05 -->

<div id="messagesBar">    
<div class="container">   
<a href="#add_note" class="edit_window_add_note">Add a note</a>
    <div id="add_note" class="edit_popup"><a href="#" class="close"><img src="images/close_pop.png" class="btn_close" title="Close Window" alt="Close" /></a>
        
      <form class="edit" action="processing/add_note.php" method="post">
      
            <fieldset class="textbox"><label class="url"><span>URL<br />Leave empty if you don't need your Label to be a hyperlink</span>
            <input name="note_url" id="note_url" type="text" maxlength="1024"></label>
            
            <label class="url"><span>Label</span>
            <input name="label" id="label" type="text" maxlength="255"></label>
            
            <label class="text"><span>Note - limit 140 characters</span>
            <textarea class="textareaAddNote" name="desc" style="width:350px; height:50px; resize: none;" wrap="soft" maxlength="140"></textarea></label>
            
            <button class="submit button" name="submit" type="submit">Add note</button></fieldset>
      </form>
    </div><!-- id="add_note" class="edit_popup" -->  
</div><!-- container -->  
   
</div><!-- messagesBar -->

    <?php
     $sql = "SELECT * FROM dblist WHERE userId='".$_SESSION['user_id']."' ORDER BY sort_order";
	 $exefd = mysql_query($sql);
	 $jp=0;
	 while($resfd  = mysql_fetch_assoc($exefd))
	 {
		 if($jp%2==0)
		   $bg = 'FFFFFF';
		 else  
		   $bg = 'FFFF01';
		 $jp++;  
    ?>
<div id="messageItems">
    <table width="600" style="background-color:#<?php echo $bg;?>">
      <tr>
        <td width="17"><a class="msgDirection" href="index.php?pos=up&id=<?php echo $resfd["dbId"];?>" title="Move up">˄</a></td>
        <td width="27"><a class="msgDirection" href="index.php?pos=dn&id=<?php echo $resfd["dbId"];?>" title="Move down">˅</a></td>

        <td width="155" align="left" class="msgText"><?php if ($resfd['note_url'] == '') { echo stripslashes($resfd["label"]); } else { echo '<a href="' . $resfd['note_url'] . '" class="textNav" target="_blank">' . stripslashes($resfd["label"]) . '</a>';} ?></td>
        
        <td width="351" align="left" class="msgText"><?php echo stripslashes($resfd["desc"]);?></td>
        <td width="50" align="center"><a class="msgDelete" href="index.php?action=delete&id=<?php echo $resfd["dbId"];?>"  onclick="return confirm('Do you want to delete?')">Delete</a></td>
      </tr>
    </table>
</div><!-- messageItems -->
   
    <?php
	 }
    ?>
<img src="images/spacer.gif" border="0" width="600" height="10"><br /> 
