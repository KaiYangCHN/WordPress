<!--文章列表UP-->
<div id="container" class="common_text">
	<?php if(have_posts()):?>
		<table width="100%" style="font-size:14px;line-height:130%">
		<?php while(have_posts()):the_post();?>
			<tr>
				<td width="40%"><a href="<?php the_permalink();?>" title="<?php the_title();?>">·<?php the_title();?></a></td>
			</tr>
			<tr>
				<td width="35%" style="font-size:12px"><?php the_excerpt();?></td>
				<td rowspan="2" width="10%" style="font-size:12px;margin-left:10px;"><?php the_time(get_option('date_format')); ?>  <?php the_time('G:i'); ?><?php getdate();?></td>
				<!--链接指向文章的URL页，当鼠标放到链接上时显示文章标题-->
			</tr>
		<?php endwhile;?>	
		</table>
		<?php pagenav($query_string); ?>
		<!--显示列表页数-->
		<div class="navigation">
			<?php posts_nav_link('in between','前一页','后一页');?>
			<!--在第一页的时候显示后一页，后一页的时候显示前一页，中间页的时候，两者都显示-->
		</div>
	<?php else : ?>
		<div class="post" >
			<h2><?php _e('Not Found'); ?></h2>
		</div>
	<?php endif;?>
</div>
<!--文章列表DOWN-->