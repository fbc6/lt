<?php echo 'QQ:1074259861';exit;?>
<div class="threadlist cl">
	<!--{if empty($threadlist)}-->
	<p class="b_p grey hm fz12 bzbt1 bzbb1">{lang search_nomatch}</p>
	<!--{else}-->
	<ul>
		<!--{loop $threadlist $thread}-->
		<li>
			<a href="forum.php?mod=viewthread&tid=$thread[realtid]&highlight=$index[keywords]" target="_blank" $thread[highlight]>$thread[subject]</a>
		</li>
		<!--{/loop}-->
	</ul>
	<!--{/if}-->
	$multipage
</div>

<!--
https://addon.dismall.com/?@banzhuan
-->