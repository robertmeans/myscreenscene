<div id="bingBar">
<form name="bing" method="get" onSubmit="return submitBing();" target="_blank">
	<span class="rowText">Bing</span>
    <span class="alignFields"><input type="text" name="q" maxlength=255 style="width:204px;" value="" /></span><!-- alignFields -->
    
    <span class="alignRadio"><input type="radio" name="bingRadio" id="bingImages" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary"><label for="bingImages">Images</label></span>&nbsp;&nbsp;<input type="radio" name="bingRadio" id="bingMaps" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary"><label for="bingMaps">Maps</label></span></span><!-- alignRadio --><span class="alignGo"><input type="submit" value="Go" style="font-size:10pt; font-family: tahoma,arial,helvetica,sans-serif;" /></span><!-- alignGo -->
</form>
</div><!-- bingBar -->