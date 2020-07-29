<?php 

get_header();
$cols = '12';
if(is_page() && $post->post_parent or get_children($post->ID)) $cols = '10';
if(!is_page()) $cols = '10';
?>

<div class="container mt-3 content-container">

	<?php streamlineBreadcrumbs($post,true); ?>
  <div class="row">
	  
	  <div class="col-md-<?=$cols?>">
		  <?php the_posts_pagination(); ?>
		  <?php
		 if(is_blog() && !is_single()):
		  if ( have_posts()) : 
    while ( have_posts() ) : the_post();?>
<div id="actionbar" class="mt-0 pt-0">
<div class="card action">
        <div class="card-body">
          <div class="row no-gutters">
            <div class="col-md-6 text-center">
				<?php if ( has_post_thumbnail()) { ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   
	   <div class="d-none d-md-block" style="width:440px; height:225px; background:url(<?php the_post_thumbnail_url(); ?>); background-position:center; background-size:cover;">
		   
	   </div>
   </a>
 <?php }else{?>
                <img src="<?php echo content_url(); ?>/uploads/2020/02/news.jpg" class="d-none d-md-block" width="444" height="225" alt="">
				<?php } ?>
            </div>
            <div class="col-md-6">
              <div class="card-text">
                <h6><?php the_title(); ?></h6>
                <small> <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></small>
                <p><?php the_excerpt(); ?>
                
                </p>
                <a href="<?php echo get_permalink(); ?>" class="btn btn-outline">Подробнее...</a>
              </div>
            </div>
          </div>
          
   
    </div>
  </div>
  </div>
        <?php
    endwhile;
else :
    _e( 'Новостей пока нет', 'textdomain' );
endif;
  else:
    if (have_posts()) : while (have_posts()) : the_post(); 	  
		  ?>
		  <div class="card">
        <div class="card-header">
          <h5><b><?php the_title(); ?></b></h5>
        </div>
        <div class="card-body">
          <?php the_content(); ?>
        </div>
      </div>
  <?php endwhile; endif; endif; ?>
     <div class="mt-3">
		  <?php the_posts_pagination(); ?>
		  </div>
    </div>

   <?php get_sidebar(); ?>
  </div>
</div>

  <?php get_footer(); ?>