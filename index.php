<?php 
	get_header();
	include(TEMPLATEPATH.'/menubar.php');
	get_sidebar();
?>
	
	<!--侧边栏右侧部分-->
	<div class="float_left" style="width:784px;">
		<!--history-->				
		<?php 	include(TEMPLATEPATH.'/history_media.php');?>					
		<!--service-->
		<div class="clear" ></div>
		<!--Menuservice-->
		<?php include(TEMPLATEPATH.'/menu_service.php');?>
		<!--Menuservice-->		
		<!--condition-->
		<?php include(TEMPLATEPATH.'/condition.php');?>
		<!--condition-->
	</div>
	<!--侧边栏右侧部分-->					
	<div class="clear"></div>
<?php 
	include(TEMPLATEPATH.'/links.php');
	get_footer();
?>	