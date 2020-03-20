<?php echo 'QQ:1074259861';exit;?>
<!--
https://addon.dismall.com/?@banzhuan
-->
<!--{template common/header}-->
<!-- header start -->
<header class="header">
	<div class="hdc cl">
		<!--{if $_G['setting']['domain']['app']['mobile']}-->
			{eval $nav = 'http://'.$_G['setting']['domain']['app']['mobile'];}
		<!--{else}-->
			{eval $nav = "forum.php";}
		<!--{/if}-->
		<ul class="user_fun_z">
			<!--{if $_G['setting']['mobile']['mobilehotthread']}-->
			<li><a href="forum.php?mod=guide&view=hot" class="icon_hotthread">{lang hot_thread}</a></li>
			<!--{/if}-->
			<li><a href="forum.php?forumlist=1" class="icon_threadlist">{lang forum_list}</a></li>
		</ul>
		<h1>{lang register}</h1>
		<ul class="user_fun_y">
			<li class="on" id="usermsg"><a href="<!--{if $_G[uid]}-->home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1<!--{else}-->member.php?mod=logging&action=login<!--{/if}-->" class="icon_userinfo">{lang user_info}</a><!--{if $_G[member][newpm]}--><span class="icon_msg"></span><!--{/if}--></li>
			<li><a href="search.php?mod=forum" class="icon_search">{lang search}</a></li>
		</ul>
	</div>
</header>
<div class="bz_h10 bg"></div>
<!-- header end -->
<!-- registerbox start -->
<div class="loginbox registerbox">
	<div class="login_from">
		<form method="post" autocomplete="off" name="register" id="registerform" action="member.php?mod={$_G[setting][regname]}&mobile=2">
		<input type="hidden" name="regsubmit" value="yes" />
		<input type="hidden" name="formhash" value="{FORMHASH}" />
		<!--{eval $dreferer = str_replace('&amp;', '&', dreferer());}-->
		<input type="hidden" name="referer" value="$dreferer" />
		<input type="hidden" name="activationauth" value="{if $_GET[action] == 'activation'}$activationauth{/if}" />
		<input type="hidden" name="agreebbrule" value="$bbrulehash" id="agreebbrule" checked="checked" />
		<ul>
			<li><input type="text" tabindex="1" class="bzlrpx p_fre" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['username']}" placeholder="{lang registerinputtip}" fwin="login"></li>
			<li><input type="password" tabindex="2" class="bzlrpx p_fre" size="30" value="" name="{$_G['setting']['reginput']['password']}" placeholder="{lang login_password}" fwin="login"></li>
			<li><input type="password" tabindex="3" class="bzlrpx p_fre" size="30" value="" name="{$_G['setting']['reginput']['password2']}" placeholder="{lang registerpassword2}" fwin="login"></li>
			<li><input type="email" tabindex="4" class="bzlrpx p_fre" size="30" autocomplete="off" value="" name="{$_G['setting']['reginput']['email']}" placeholder="{lang registeremail}" fwin="login"></li>
			<!--{if empty($invite) && ($_G['setting']['regstatus'] == 2 || $_G['setting']['regstatus'] == 3)}-->
				<li><input type="text" name="invitecode" autocomplete="off" tabindex="5" class="bzlrpx p_fre" size="30" value="" placeholder="{lang invite_code}" fwin="login"></li>
			<!--{/if}-->
			<!--{if $_G['setting']['regverify'] == 2}-->
				<li><input type="text" name="regmessage" autocomplete="off" tabindex="6" class="bzlrpx p_fre" size="30" value="" placeholder="{lang register_message}" fwin="login"></li>
			<!--{/if}-->
		</ul>
		<!--{if $secqaacheck || $seccodecheck}-->
			<!--{subtemplate common/seccheck}-->
		<!--{/if}-->
	</div>
	<div class="btn_register"><button tabindex="7" value="true" name="regsubmit" type="submit" class="formdialog pn pnc"><span>{lang quickregister}</span></button></div>
	</form>
</div>
<!-- registerbox end -->

<!--{eval updatesession();}-->
<!--{template common/footer}-->
<!--
https://addon.dismall.com/?@banzhuan
-->