
<?php 

if (  is_page() ){ 
	
	if($post->post_parent or get_children($post->ID) != []){
		echo '<div class="col-md-2 sidebar"><h5>Страницы раздела</h5> <hr>';
		wpb_list_child_pages(); 
		echo '</div>';
	}
}else{
	echo '<div class="col-md-2 sidebar"><h5>Категории</h5> <hr><ul class="child-pages"><li><a href="'.get_permalink( get_option( 'page_for_posts' ) ).'">Все категории</a></li>';
	wp_list_categories( [ 'title_li'           =>false, ] );
	
	echo '</ul></div>';
}

?>
   