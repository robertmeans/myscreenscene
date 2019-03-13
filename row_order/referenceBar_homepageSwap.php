<?
// onSubmitFormSwap() in scripts/scripts.js
?>
<div id="referenceBar">
<form name="reference" method="get" onSubmit="return OnSubmitFormSwap();" target="_blank">
	<span class="rowText"><span class="youtube">Dictionary</span></span><!-- rowText -->
    <input type="hidden" name="dictionary" value="1" checked="checked" />
    <span class="alignFields"><input type="text" name="q" id="q" maxlength=260 style="width:204px;" /></span><!-- alignFields -->
    
    <span class="alignRadio"><input type="radio" name="thesaurus" id="thesaurus" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary"><label for="thesaurus" onMouseDown="document.getElementById('thesaurus').__chk = document.getElementById('thesaurus').checked" onClick="if (document.getElementById('thesaurus').__chk) document.getElementById('thesaurus').checked = false">Thesaurus</label></span></span><!-- alignRadio --><span class="alignGo"><input type="submit" name="submit" value="Go" style="font-size:10pt; font-family: tahoma,arial,helvetica,sans-serif;" /></span><!-- alignGo -->
</form>
</div><!-- referenceBar -->