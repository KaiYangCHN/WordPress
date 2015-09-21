<div id="sidebar">
	<div class="sidebar_sub_tip">
		<div style="margin-left:150px;margin-top:5px">
			<?php
				// Get the ID of a given category
				$category_id = get_cat_ID( 'notice' );
									
				// Get the URL of this category
				$category_link = get_category_link( $category_id );
				echo '<a href="'.$category_link.'">';?><img alt="" src="<?php themerelativepath();?>/images/common/button.png" width="30" height="30"/></a>
		</div>
		<div class="common_list float_left" style="margin-top:5px;width:190px; height:175px; overflow:hidden;">
			<ul>
				<?php $args = array( 'category_name' => notice,'numberposts'=>5 );$lastposts = get_posts( $args );
					foreach($lastposts as $post) : setup_postdata($post); ?>
						<li><a href="<?php the_permalink(); ?>">·<?php the_title(); ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>			
	<!--service UP-->
	<div class="sidebar_sub_service">
		<div style="margin-left:150px;">
			<?php
				// Get the ID of a given category
				$category_id = get_cat_ID( 'service' );
									
				// Get the URL of this category
				$category_link = get_category_link( $category_id );
				echo '<a href="'.$category_link.'">';?><img alt="" src="<?php themerelativepath();?>/images/common/button.png" width="30" height="30"/></a>
		</div>
		<div class="common_list float_left" style="margin-top:15px; width:190px;height:220px; overflow:hidden;">
			<table   align="center" cellpadding="3" style="margin-left:-3px">
				<tr>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/email.png" width="55" height="55"/></a></td>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/senmiao.png" width="55" height="55"/></a></td>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/ticket.png" width="55" height="55"/></a></td>
				</tr>
				<tr>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/consultation.png" width="55" height="55"/></a></td>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/school.png" width="55" height="55"/></a></td>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/pickup.png" width="55" height="55"/></a></td>
				</tr>
				<tr>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/certify.png" width="55" height="55"/></a></td>
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/housing.png" width="55" height="55"/></a></td>					
					<td><a href="http"><img src="<?php themerelativepath();?>/images/service/service.png" width="55" height="55"/></a></td>
				</tr>
			</table>
		</div>
	</div>
</div>
