<?php
if (function_exists('register_sidebar'))
    register_sidebar();
?>
<?php //pagenav
	function pagenav($query_string)
	{
		global $posts_per_page, $paged;
		$my_query = new WP_Query($query_string ."&posts_per_page=-1");
		$total_posts = $my_query->post_count;
		if(empty($paged))$paged = 1;
		$prev = $paged - 1;
		$next = $paged + 1;
		$range = 4; // only edit this if you want to show more page-links
		$showitems = ($range * 2)+1;
		$pages = ceil($total_posts/$posts_per_page);
		if(1 != $pages)
		{
			echo "<div class='pagination'>";
			echo ($paged > 2 && $paged+$range+1 > $pages && $showitems < $pages)? "<a href='".get_pagenum_link(1)."'>最前</a>":"";
			echo ($paged > 1 && $showitems < $pages)? "<a href='".get_pagenum_link($prev)."'>上一页</a>":"";
	
			for ($i=1; $i <= $pages; $i++)
			{
				if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
				{
					echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
				}
			}
			echo ($paged < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($next)."'>下一页</a>" :"";
			echo ($paged < $pages-1 && $paged+$range-1 < $pages && $showitems < $pages) ? "<a href='".get_pagenum_link($pages)."'>最后</a>":"";
			echo "</div>\n";
		}
	}
?>
<?php //comments_popup_script(); // off by default ?>
<?php 
	/*获取当前路径，用于显示主题文件夹下的图片*/
	function themerelativepath()
	{
		$relativepath = get_bloginfo('template_directory');
		echo $relativepath;
		/*
		$relativepath=substr($img_folder,strlen(get_bloginfo('home'))+1);
		*/
	}
?>
<?php 
/*获取单独的分类链接并返回到a标签中，需要有后续的</a>与之匹配*/
function get_my_category_link($categoryName)
	{
		// Get the ID of a given category
		$category_id = get_cat_ID($categoryName);				
		// Get the URL of this category
		$category_link = get_category_link( $category_id );
		return $category_link;
	}
?>