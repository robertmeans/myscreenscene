<div id="referenceBar">
<form name="reference" method="get" onSubmit="return OnSubmitForm();" target="_blank">
	<span class="rowText"><span class="youtube">Thesaurus</span></span><!-- rowText -->
    <input type="hidden" name="thesaurus" value="1" checked="checked" />
    <span class="alignFields"><input type="text" name="q" id="q" maxlength=260 style="width:204px;" /></span><!-- alignFields -->
    
    <span class="alignRadio"><input type="radio" name="dictionary" id="dictionary" onMouseDown="this.__chk = this.checked" onClick="if (this.__chk) this.checked = false" /><span class="dictionary"><label for="dictionary" onMouseDown="document.getElementById('dictionary').__chk = document.getElementById('dictionary').checked" onClick="if (document.getElementById('dictionary').__chk) document.getElementById('dictionary').checked = false">Dictionary</label></span></span><!-- alignRadio --><span class="alignGo"><input type="submit" name="submit" value="Go" style="font-size:10pt; font-family: tahoma,arial,helvetica,sans-serif;" /></span><!-- alignGo -->
</form>
</div><!-- referenceBar -->