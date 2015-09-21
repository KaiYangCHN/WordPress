<!--文章内容UP-->
<div id="container" class="container_text">
	<?php if(have_posts()):?>
		<?php while(have_posts()):the_post();?>
			<p>
			当前位置: <a href="http" title="主页">主页</a>>><?php $categorys = get_the_category(); $category = $categorys[0];echo(get_category_parents($category->term_id,true,'>>'));the_title();?>
			</p>
			<div class="title" style="text-indent:24px;color:#ff6600;font-size:20px;text-align: center;font-family:宋体">
				<h3><?php the_title();?></h3>
			</div>
			<div class="entry" id="entry-<?php the_ID();?>">
				<?php the_content();?>
				<!--用于显示文章内容-->
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
				<!--用于显示文章分页-->							
			</div>						
		<?php endwhile;?>					
	<?php else : ?>
		<div class="post" >
			<h2><?php _e('本分类下暂无文章'); ?></h2>
		</div>
	<?php endif;?>
	<?php include((TEMPLATEPATH.'/baidu_share.php'));?>
</div>
<!--文章内容UP-->