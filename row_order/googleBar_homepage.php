<div id="googleBar">
<form name="google" method="get" onSubmit="return submitGoogle();" target="_blank">
	<span class="rowText"><span class="bing">Google</span></span>
    <span class="alignFields"><input type="text" name="q" maxlength=255 style="width:204px;" value="" /></span><!-- alignFields -->
     
    <span class="alignRadio"><input type="radio" name="googleRadio" id="googleImages" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary"><label for="googleImages">Images</label></span>&nbsp;&nbsp;<input type="radio" name="googleRadio" id="googleMaps" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary"><label for="googleMaps">Maps</label></span></span><!-- alignRadio --><span class="alignGo"><input type="submit" value="Go" style="font-size:10pt; font-family: tahoma,arial,helvetica,sans-serif;" /><!-- alignGo -->
</form>
</div><!-- googleBar -->