<div id="bingBar">
<form><!-- form tags needed just to maintain formatting -->
	<span class="rowText"><span class="bing">Bing</span></span>
    <span class="alignFields"><input type="text" name="q" maxlength=255 style="width:204px;" value="" /></span><!-- alignFields -->
    
    <span class="alignRadio"><input type="radio" name="bingRadio" id="bingImages" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary">Images</span>&nbsp;&nbsp;<input type="radio" name="bingRadio" id="bingMaps" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary">Maps</span></span><!-- alignRadio --><span class="alignGo"><input type="submit" value="Go" style="font-size:10pt; font-family: tahoma,arial,helvetica,sans-serif;" onClick="alert('You are in Edit Mode. Click on the Home link at the top to use this feature.');" /></span><!-- alignGo -->
</form>
</div><!-- bingBar -->