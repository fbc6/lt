<?php echo 'QQ:1074259861';exit;?>
<!--
https://addon.dismall.com/?@banzhuan
-->
{eval
	$sechash = 'S'.random(4);
	$sectpl = !empty($sectpl) ? explode("<sec>", $sectpl) : array('<br />',': ','<br />','');	
	$ran = random(5, 1);
}
<!--{if $secqaacheck}-->
<!--{eval
	$message = '';
	$question = make_secqaa();
	$secqaa = lang('core', 'secqaa_tips').$question;
}-->
<!--{/if}-->
<!--{if $sectpl}-->
	<!--{if $secqaacheck}-->
		<div class="b_p" style="font-size: 15px;border-bottom: 1px solid #EFEFEF;">
	        {lang secqaa}: 
	        <span class="xg2">$secqaa</span>
			<input name="secqaahash" type="hidden" value="$sechash" />
	        <input name="secanswer" id="secqaaverify_$sechash" type="text" class="bzlrpx" placeholder="{lang security_a}" />
        </div>
	<!--{/if}-->
	<!--{if $seccodecheck}-->
		<div class="sec_code vm">
			<input name="seccodehash" type="hidden" value="$sechash" />
			<input type="text" class="vm z" style="ime-mode:disabled;width:46%;padding:1px 1.5%;height:26px;background:#F2F2F2;border: 1px solid #EFEFEF;" autocomplete="off" value="" id="seccodeverify_$sechash" name="seccodeverify" placeholder="{lang seccode}" fwin="seccode">
	        <img src="misc.php?mod=seccode&update={$ran}&idhash={$sechash}&mobile=2" class="seccodeimg" style="height:30px;width:50%;" />
		</div>
	<!--{/if}-->
<!--{/if}-->
<script type="text/javascript">
	(function() {
		$('.seccodeimg').on('click', function() {
			$('#seccodeverify_$sechash').attr('value', '');
			var tmprandom = 'S' + Math.floor(Math.random() * 1000);
			$('.sechash').attr('value', tmprandom);
			$(this).attr('src', 'misc.php?mod=seccode&update={$ran}&idhash='+ tmprandom +'&mobile=2');
		});
	})();
</script>

<!--
https://addon.dismall.com/?@banzhuan
-->