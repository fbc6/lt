<?php echo 'QQ:1074259861';exit;?>
<!--{template common/header}-->
<div class="tip">
<!--{if $_GET['op'] == 'delete'}-->
	<form id="favoriteform_{$favid}" name="favoriteform_{$favid}" method="post" autocomplete="off" action="home.php?mod=spacecp&ac=favorite&op=delete&favid=$favid&type=$_GET[type]&mobile=2">
		<input type="hidden" name="referer" value="{eval echo dreferer();}" />
		<input type="hidden" name="deletesubmit" value="true" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
	<dt>{lang delete_favorite_message}</dt>
	<dd><input type="submit" name="deletesubmitbtn" value="{lang determine}" class="formdialog button2"></dd>
	</form>
<!--{else}-->
	<form method="post" autocomplete="off" id="favoriteform_{$id}" name="favoriteform_{$id}" action="home.php?mod=spacecp&ac=favorite&type=$type&id=$id&spaceuid=$spaceuid&mobile=2" >
		<input type="hidden" name="favoritesubmit" value="true" />
		<input type="hidden" name="referer" value="{eval echo dreferer();}" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
	<dt>
    <p><!--{if $_GET[type] == 'forum'}-->{lang favorite_forum_confirm}<!--{elseif $_GET[type] == 'thread'}--> {lang favorite_thread_confirm}<!--{/if}--><strong>{$title}</strong></p>
	<p>{lang favorite_description}:</p>
	<textarea id="general_{$id}" name="description" rows="1" class="txt mtn" ><!--{if $description}-->$description<!--{else}-->{lang favorite_description_default}<!--{/if}--></textarea>
	</dt>
	<dd><input type="submit" name="favoritesubmit_btn" id="favoritesubmit_btn"  value="{lang determine}" class="formdialog button2"><a href="javascript:;" onclick="popup.close();">{lang cancel}</a></dd>
	</form>
<!--{/if}-->
</div>

<!--{template common/footer}-->
<!--
https://addon.dismall.com/?@banzhuan
-->
