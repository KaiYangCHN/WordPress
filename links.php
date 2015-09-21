<!--友情链接 UP-->
<div id="links">
	<div class="links_body float_left">
		<div class="links_text float_left">友情链接</div>
		<div class="common_text links_list">
			<ul>
				<?php $args = array('title_li' =>'');?>
				<?php wp_list_bookmarks($args);?>
			</ul>
		</div>
	</div>
</div>
<!--友情链接 DOWN-->