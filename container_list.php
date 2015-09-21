<!--文章列表UP-->
<div id="container" class="common_text">
<?php 
    global $cat; 
    $cats = get_categories(array( 
        'child_of' => $cat, 
        'parent' => $cat, 
        'hide_empty' => 0 
    )); 
    $c = get_category($cat); 
    if(empty($cats)){ 
?> 
<div class="item"> 
    <?php if(have_posts()):?>
		<table width="100%" style="font-size:14px;line-height:130%">
		<?php while(have_posts()):the_post();?>
			<tr>
				<td width="80%"><a href="<?php the_permalink();?>" title="<?php the_title();?>">·<?php the_title();?></a></td>
				<td width="20%" style="font-size:12px"><?php the_time(get_option('date_format')); ?>  <?php the_time('G:i'); ?><?php getdate();?></td>
				<!--链接指向文章的URL页，当鼠标放到链接上时显示文章标题-->
			</tr>								
		<?php endwhile;?>	
		</table>
    <?php else: ?> 
        <div class="post"><p>文章稍后更新</p></div> 
    <?php endif; ?> 
</div> 
<?php pagenav($query_string); ?>
		<!--显示列表页数-->
		<div class="navigation">
			<?php posts_nav_link('in between','前一页','后一页');?>
			<!--在第一页的时候显示后一页，后一页的时候显示前一页，中间页的时候，两者都显示-->
		</div>
<?php 
}else{ 
    foreach($cats as $the_cat){ 
        $posts = get_posts(array( 
            'category' => $the_cat->cat_ID, /*获取the_cat中的cat_ID的值*/
            'numberposts' => 17, 
        )); 
        if(!empty($posts)){ 
            echo ' 
            <table style="float:left;width:360px;border:1;padding:5px;font-size:14px;line-height:130%"> 
                <tr>
                <th align="center" colspan="2" width="360px"><h3><a title="'.$the_cat->name.'" href="'.get_category_link($the_cat).'">'.$the_cat->name.'</a></h3></th>   
                </tr>';
                
                    foreach($posts as $post){ 
                        echo '<tr><td>·<a title="'.$post->post_title.'" href="'.get_permalink($post->ID).'">'.$post->post_title.'</a></td>
						</tr>'; 
                    } 
				/*当在子分类下显示的文章数超过17条时显示查看更多点击后显示更多的文章列表需要在table中实现否则显示会出现问题*/	
				if (get_category($the_cat->cat_ID)->count >17)
				{
					echo '<tr><td><a title="更多" href="'.get_category_link($the_cat).'">查看更多...</a></td></tr>';
				}
				echo '</table>'; 
			/*pagenav($query_string);*/
			/*显示列表页数*/
			/*echo'<div class="navigation">'.posts_nav_link('in between','前一页','后一页').'</div>';*/
				/*在第一页的时候显示后一页，后一页的时候显示前一页，中间页的时候，两者都显示*/
			
        } 
    } 
}
?> 
</div>
<!--文章列表DOWN-->