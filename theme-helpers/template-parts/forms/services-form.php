<?php
if(preg_match("/(^|\|)success_form/",implode("|",array_keys($_GET)))){?>
<h3>Спасибо! Доступ к материалам отправлен вам на почту.</h3>
<?php } else { ?>
<form class="form-goriz " id="ltForm5478395" action="https://edu.growcapital.ru/pl/lite/block-public/process-html?id=969693090" method="post" data-open-new-window="0"><input type="hidden" name="formParams[setted_offer_id]"><br>
	<input type="text" class="wdth-66" maxlength="60" placeholder="Введите ваш эл. адрес" name="formParams[email]" value=""><br>
	<button type="submit" id="button5066671" class="btn" onclick="if(window['btnprs60128b218fd4a']){return false;}window['btnprs60128b218fd4a']=true;setTimeout(function(){window['btnprs60128b218fd4a']=false},6000);return true;">
		Получить</button><br>
	<input type="hidden" id="32915460128b2180f82" name="__gc__internal__form__helper" class="__gc__internal__form__helper" value="">
	<input type="hidden" id="32915460128b2180f82ref" name="__gc__internal__form__helper_ref" class="__gc__internal__form__helper_ref" value="">
	<input type="hidden" name="requestTime" value="1611828001">
	<input type="hidden" name="requestSimpleSign" value="db62be44ba9705ebc7efa7d6dd3e010c">
	<input type="hidden" name="isHtmlWidget" value="1" />
</form>
<span id="gccounterImgContainer"></span>
<script>
	window.addEventListener('load', function() {
		let loc = document.getElementById("32915460128b2180f82");
		loc.value = window.location.href;
		let ref = document.getElementById("32915460128b2180f82ref");
		ref.value = document.referrer;
		let statUrl = "https://edu.growcapital.ru/stat/counter?ref=" + encodeURIComponent(document.referrer) +
			"&loc=" + encodeURIComponent(document.location.href);
		document.getElementById('gccounterImgContainer').innerHTML = "<img width=1 height=1 style='display:none' id='gccounterImg' src='" + statUrl + "'/>";
	});
</script>
<?php } ?>