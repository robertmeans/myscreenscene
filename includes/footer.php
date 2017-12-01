</div><!-- home - in includes/footer-->
<div id="footer">

<!--<div class="footer_social">-->
<script type="text/javascript">
//var addthis_config =
//{
//   ui_delay: 500
//}
</script>
<!--
<div class="addthis_toolbox addthis_default_style addthis_16x16_style">
<a class="addthis_button_compact"><img src="images/social_sharing.jpg" border="0" width="140" height="20"></a>
</div>
--><!-- addthis_toolbox addthis_default_style addthis_16x16_style -->

<!--
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=undefined"></script>
</div>
--><!-- footer_social -->
<?php

function ewd_copyright($startYear) {
	$currentYear = date('Y');
	if ($startYear < $currentYear) {
		$currentYear = date('y');
		return "&copy; $startYear&ndash;$currentYear";
	} else {
		return "&copy; $startYear";
	}
}

 ?>
<div class="footer_copyright">
<?= ewd_copyright(2015); ?> myscreenscene.com. all rights reserved. v1.5.0 
</div><!-- footer_copyright -->   
</div><!-- footer -->