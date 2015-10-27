<?php
/*List all records*/
include 'core/init.php';


if(@$_GET['pos']=="up")
{
 $id =$_GET['id'];
 $sqlfd ="select * from dblist where dbId =".$id;
 $exefd =mysql_query($sqlfd);
 $resfd = mysql_fetch_array($exefd);
 
 $so =$resfd['sort_order'];
 if($so >1)
 $next = $so-1;
 else
 {
  $next =1;
  header('location:index.php?msg=This is first record.');
  exit;
  }
  
   $upd2="update dblist set sort_order='$so' where sort_order=".$next;
   mysql_query($upd2);
  
  $upd ="update dblist set sort_order='$next' where dbId=".$id;
  mysql_query($upd);
  header('location:index.php?msg=Updated successfully');
 
 
}
if(@$_GET['pos']=="dn")
{
 $id =$_GET['id'];
 $sqlfd ="select * from dblist where dbId =".$id;
 $exefd =mysql_query($sqlfd);
 $resfd = mysql_fetch_array($exefd);
 
 $so =$resfd['sort_order'];
 
    $sqlfd ="select max(sort_order) as mx from dblist";//used to find the order
	 $exefd = mysql_query($sqlfd);
	 $resfd  = mysql_fetch_array($exefd);
	 $ord_val = $resfd['mx'];
	 
	 if($so < $ord_val)
	   $dn =$so+1;
	 else
	 {
	   $dn =$ord_val;
	     header('location:index.php?msg=This is last record.');
         exit;
	   }
 
  
   $upd2="update dblist set sort_order='$so' where sort_order=".$dn;
   mysql_query($upd2);
  
  $upd ="update dblist set sort_order='$dn' where dbId=".$id;
  mysql_query($upd);
  header('location:index.php?msg=Updated successfully');
 
 
}

if(@$_GET['id'] !='' && @$_GET['action']=="delete")
{
	$id = $_GET['id'];
	$del =mysql_query("delete from dblist where dbId='$id'");//delete query
	header('location:index.php?msg=Details deleted successfully');
}

    $sql = "select * from dblist where userId='".$_SESSION['user_id']."' order by sort_order ASC ";//list all records from db.
	$exe = mysql_query($sql);
	$rows	= mysql_num_rows($exe);
	
	
	

if(@$_GET['msg'] !='')
 $msg =$_GET['msg'];

?>
<style>
.error { font-weight:bold; color:#006600;  font-size:12px;}
#tble { font-size:12px;}
</style>
<form action="" method="post" enctype="multipart/form-data" name="form1">

  <table width="80%"  border="0" align="center" cellpadding="4" cellspacing="4" id="tble">
  
  <?php
  if($msg !='')
  {?>
    <tr>
      <td colspan="5" class="error" align="center"><?php echo $msg; ?>&nbsp;</td>
    </tr>
	<?php
	}?>
	<?php
	if($rows >0) {?>
	 <tr>
      <td width="47">&nbsp;</td>
	  <td width="37">&nbsp;</td>
      <td width="254"><strong> Text </strong></td>
	    <td width="321"><strong> Notes </strong></td>
      <td width="342"><b>Action</b></td>

    </tr>
	<?php
	}?>
	<tr><td colspan="5" >

	<?php 

	$k=1;
 while($row = mysql_fetch_array($exe))
 {
	

	if($k%2==0)
	  $bgcol ="#FFFFFF";
	else
	  $bgcol ="#FFFF01";
	$title =$row['title'];
	 $desc = $row['desc'];
	 
	 $sotorder[] = $row['dbId'];
	 
   	 $cf = "return confirm('Do you want to delete?')";
	 
	
	
	

    ?>
	<table  width="100%" style="background-color:<?php echo $bgcol;?>" id="tble">
	<tr><td width="5%"><a href="index.php?pos=up&id=<?php echo $row['dbId'];?>">U</a></td><td width="4%"><a href="index.php?pos=dn&id=<?php echo $row['dbId'];?>">D</a></td><td width="26%"><?php echo $title;?></td><td width="32%"> <?php echo $desc;?></td><td width="33%"><a href="index.php?action=delete&id=<?php echo $row['dbId'];?>"  onclick="return confirm('Do you want to delete?')">Delete</a></td></tr></table>
	
	<?php $k=$k+1; } ?>
	
	</td></tr>
	<tr><td  colspan="3"><input type="hidden" name="sort_order" id="sort_order" value="<?php echo implode(',',$sotorder); ?>" /></td></tr>
    <tr>
      <td colspan="3">&nbsp;</td>
    </tr>
  </table>
</form>