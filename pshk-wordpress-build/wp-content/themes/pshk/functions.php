<?php

require 'walker.php';


function pshk_setup()
{
  if (function_exists('add_theme_support')) {
    add_theme_support('menus');
  }
	add_theme_support( 'post-thumbnails' );
	

  register_nav_menu('primary', 'Главное меню');
	register_nav_menu('secondary', 'Второстепенное меню');
	register_nav_menu('footer_info', 'Информация в подвале');
	register_nav_menu('footer_other', 'Прочие ссылки в подвале');
  remove_all_filters( 'wp_nav_menu_args' );

}
add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );

function my_post_image_html( $html, $post_id, $post_image_id ) {

  $html = '<a href="' . get_permalink( $post_id ) . '" title="' . esc_attr( get_post_field( 'post_title', $post_id ) ) . '">' . $html . '</a>';
  return $html;

}
/* Удаляем H2 из пагинации */ 
add_filter('navigation_markup_template', 'my_navigation_template', 10, 2 );
function my_navigation_template( $template, $class ){
 return '

  <div class="mb-4">%3$s</div>
     
 ';
}
function the_breadcrumb() {
	$sep = ' / ';
	if (!is_front_page()) {

// Start the breadcrumb with a link to your homepage
			echo '<nav aria-label="breadcrumb"><ol class="breadcrumb background-light">';
			echo '<li class="breadcrumb-item"><a href="';
			echo get_option('home');
			echo '">';
			echo 'Главная';
			echo '</a></li>';

// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
			if (is_category() || is_single() ){
				echo '<li class="breadcrumb-item"><a href="'.get_permalink( get_option( 'page_for_posts' ) ).'">Блог</a></li><li class="breadcrumb-item active">';
						the_category('title_li=');
					echo '</li>';
					
			} elseif (is_archive() || is_single()){
					if ( is_day() ) {
							printf( __( '%s', 'text_domain' ), get_the_date() );
					} elseif ( is_month() ) {
							printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
					} elseif ( is_year() ) {
							printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
					} else {
							_e( 'Blog Archives', 'text_domain' );
					}
			}

// If the current page is a single post, show its title with the separator
			if (is_single()) {
					echo $sep, '<li class="breadcrumb-item active"><a>';
					the_title();
					echo '</a></li>';
			}

// If the current page is a static page, show its title.
			if (is_page()) {
				echo '<li class="breadcrumb-item active"><a>';
				the_title();
				echo '</a></li>';
			}

// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
			if (is_home()){
					global $post;
					$page_for_posts_id = get_option('page_for_posts');
					if ( $page_for_posts_id ) { 
							$post = get_page($page_for_posts_id);
							setup_postdata($post);
							echo  '<li class="breadcrumb-item active"><a>';
					the_title();
					echo '</a></li>';
							
							rewind_posts();
					}
			}
			echo '</ol></nav>';
	}
}


function streamlineBreadcrumbs($post, $displayCurrent){
	echo '<nav aria-label="breadcrumb"><ol class="breadcrumb background-light">';
	$count = 1;
	$postAncestors = get_post_ancestors($post);
	$sortedAncestorArray = array();
	foreach ($postAncestors as $ancestor){
		$sortedAncestorArray[] = $ancestor;
	}
	krsort($sortedAncestorArray); // Sort an array by key in reverse order
echo '<li class="breadcrumb-item"><a href="'.home_url().'" rel="nofollow">Главная</a></li>';
	foreach ($sortedAncestorArray as $ancestor){
		echo "<li class='breadcrumb-item'><a class='breadcrumb-link-". $count ."' href='". esc_url(get_permalink($ancestor)) ."' title='". get_the_title($ancestor) ."'>". get_the_title($ancestor) ."</li>";
		$count++;
	}
	if($displayCurrent){ //If TRUE - output the current page title
		if(is_blog()){
			
			if (is_category()){
				echo '<li class="breadcrumb-item active"><a href="'.get_permalink( get_option( 'page_for_posts' ) ).'">Новости</a></li><li class="breadcrumb-item active">';
						$categories = get_the_category();
				$category_id = get_cat_ID( $categories[0]->name );
				$category_link = get_category_link( $category_id );
						echo '<a href="'.$category_link.'">'.$categories[0]->name.'</a>';
					echo '</li>';
					
			}
			if (is_single()){
				echo '<li class="breadcrumb-item active"><a href="'.get_permalink( get_option( 'page_for_posts' ) ).'">Новости</a></li><li class="breadcrumb-item">';
				$categories = get_the_category();
				$category_id = get_cat_ID( $categories[0]->name );
				$category_link = get_category_link( $category_id );
						echo '<a href="'.$category_link.'">'.$categories[0]->name.'</a>';
					echo '</li>';
				echo '<li class="breadcrumb-item active">';
						the_title();
					echo '</li>';
					
			}
			if(!is_single() && !is_category()) echo '<li class="breadcrumb-item active"><a>Новости</a></li>';
		}else{
			echo "<li class='breadcrumb-item active'><a>". get_the_title($post) ."</a>";
		}
		
	}
	
	echo '</ol></nav>';
}
function is_blog () {
	global  $post;
	$posttype = get_post_type($post );
	return ( ((is_archive()) || (is_author()) || (is_category()) || (is_home()) || (is_single()) || (is_tag())) && ( $posttype == 'post')  ) ? true : false ;
}
function wpb_list_child_pages() { 
 
global $post; 
 
if ( is_page() && $post->post_parent )
 
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&exclude='.$post->ID.'&echo=0' );
else
    $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&exclude='.$post->ID.'&echo=0' );
 
if ( $childpages ) {
 
    $string = '<ul class="child-pages">' . $childpages . '</ul>';
}
 
echo  $string;
 
}




add_action('after_setup_theme', 'pshk_setup');
?>