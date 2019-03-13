<?
// referenceBar.php and referenceBarSwap.php are the 2 pages rendering in Edit Mode
// referenceBar_homepage and referenceBar_homepageSwap run functionality
// this page is the Edit Mode page where Thesaurus is the default option
// this page does not control the Thesaurus or Dictionary functionality
?>
<div id="referenceBar">
<form class="searchform"><!-- form tags needed just to maintain formatting -->
	<span class="rowText"><class class="youtube">Thesaurus</span></span><!-- rowText -->
    <input type="hidden" name="thesaurus" value="1" checked="checked" />
    <span class="alignFields"><input type="text" name="q" id="q" maxlength=260 style="width:204px;" /></span><!-- alignFields -->
    
    <span class="alignRadio"><input type="radio" name="dictionary" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary">Dictionary</span></span><!-- alignRadio -->
    <span class="referenceAlignGo"><input type="submit" name="submit" value="Go" style="font-size:10pt; font-family: tahoma,arial,helvetica,sans-serif;" /></span><!-- referenceAlignGo -->
</form>
	<form class="searchform" name="referenceSwap" action="row_order/reference_processing.php" method="post"><input type="hidden" name="reference_swap" value="2"><span class="referenceSwap"><a href="javascript:document.referenceSwap.submit();" class="edit_window">Dictionary</a></span></form><!-- referenceSwap -->
</div><!-- referenceBar -->