<?php echo 'QQ:1074259861';exit;?>
<!--
https://addon.dismall.com/?@banzhuan
-->
<!--{if $_G['setting']['mobile']['mobilehotthread'] && $_GET['forumlist'] != 1}-->
	<!--{eval dheader('Location:forum.php?mod=guide&view=hot');exit;}-->
<!--{/if}-->
<!--{template common/header}-->

<script type="text/javascript">
	function getvisitclienthref() {
		var visitclienthref = '';
		if(ios) {
			visitclienthref = 'https://itunes.apple.com/cn/app/zhang-shang-lun-tan/id489399408?mt=8';
		} else if(andriod) {
			visitclienthref = 'http://www.discuz.net/mobile.php?platform=android';
		}
		return visitclienthref;
	}
</script>

<!--{if $_GET['visitclient']}-->

<header class="header">
    <div class="nav">
		<span>{lang warmtip}</span>
    </div>
</header>
<div class="cl">
	<div class="clew_con">
		<h2 class="tit">{lang zsltmobileclient}</h2>
		<p>{lang visitbbsanytime}<input class="redirect button" id="visitclientid" type="button" value="{lang clicktodownload}" href="" /></p>
		<h2 class="tit">{lang iphoneandriodmobile}</h2>
		<p>{lang visitwapmobile}<input class="redirect button" type="button" value="{lang clicktovisitwapmobile}" href="$_GET[visitclient]" /></p>
	</div>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
	} else {
		window.location.href = '$_GET[visitclient]';
	}
</script>

<!--{else}-->

<!-- header start -->
<!--{if $showvisitclient}-->

<div class="visitclienttip vm" style="display:block;">
	<a href="javascript:;" id="visitclientid" class="btn_download">{lang downloadnow}</a>	
	<p>
		{lang downloadzslttoshareview}
	</p>
</div>
<script type="text/javascript">
	var visitclienthref = getvisitclienthref();
	if(visitclienthref) {
		$('#visitclientid').attr('href', visitclienthref);
		$('.visitclienttip').css('display', 'block');
	}
</script>

<!--{/if}-->

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
			<li class="on"><a href="forum.php?forumlist=1" class="icon_threadlist">{lang forum_list}</a></li>
		</ul>
		<h1>$_G['setting']['sitename']</h1>
		<ul class="user_fun_y">
			<li id="usermsg"><a href="<!--{if $_G[uid]}-->home.php?mod=space&uid=$_G[uid]&do=profile&mycenter=1<!--{else}-->member.php?mod=logging&action=login<!--{/if}-->" class="icon_userinfo">{lang user_info}</a><!--{if $_G[member][newpm]}--><span class="icon_msg"></span><!--{/if}--></li>
			<li><a href="search.php?mod=forum" class="icon_search">{lang search}</a></li>
		</ul>
	</div>
</header>
<div class="bz_h10 bg"></div>
<!-- header end -->
<!--{hook/index_top_mobile}-->
<!-- main forumlist start -->
<div class="wp b_p bz-bg-fff bzbt1 bzbb1" id="wp">
	<!--{loop $catlist $key $cat}-->
	<div class="bm bmw fl">
		<div class="subforumshow bm_h cl" href="#sub_forum_$cat[fid]">
			<span class="o"><img src="./template/banzhuan_freewap/touch/common/images/collapsed_<!--{if !$_G[setting][mobile][mobileforumview]}-->yes<!--{else}-->no<!--{/if}-->.png"></span>
			<h2><a href="javascript:;">$cat[name]</a></h2>
		</div>
		<div id="sub_forum_$cat[fid]" class="sub_forum bm_c">
			<ul>
				<!--{loop $cat[forums] $forumid}-->
				<!--{eval $forum=$forumlist[$forumid];}-->
				<li><a href="forum.php?mod=forumdisplay&fid={$forum['fid']}"><!--{if $forum[todayposts] > 0}--><span class="num">$forum[todayposts]</span><!--{/if}-->{$forum[name]}</a></li>
				<!--{/loop}-->
			</ul>
		</div>
	</div>
	<!--{/loop}-->
</div>
<!-- main forumlist end -->
<!--{hook/index_middle_mobile}-->
<script type="text/javascript">
	(function() {
		<!--{if !$_G[setting][mobile][mobileforumview]}-->
			$('.sub_forum').css('display', 'block');
		<!--{else}-->
			$('.sub_forum').css('display', 'none');
		<!--{/if}-->
		$('.subforumshow').on('click', function() {
			var obj = $(this);
			var subobj = $(obj.attr('href'));
			if(subobj.css('display') == 'none') {
				subobj.css('display', 'block');
				obj.find('img').attr('src', './template/banzhuan_freewap/touch/common/images/collapsed_yes.png');
			} else {
				subobj.css('display', 'none');
				obj.find('img').attr('src', './template/banzhuan_freewap/touch/common/images/collapsed_no.png');
			}
		});
	 })();
</script>

<!--{/if}-->
<!--{template common/footer}-->
<!--
https://addon.dismall.com/?@banzhuan
-->