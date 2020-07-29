<section id="actionbar">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
    
              <h5>События</h5>
              <?php
            $posts = get_posts( array(
              'numberposts' => 5,
              'category'    => 8,
              'orderby'     => 'date',
              'order'       => 'DESC'));

              foreach ($posts as $post):
                
               ?>
              <div class="card action">
                <div class="card-body">
                  <div class="row no-gutters">
                    <div class="col-md-4 text-center">
						<?php if ( has_post_thumbnail()) { ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   
	   <div  class="mobile-d-none d-none d-md-block" style="width:167px; height:193px; background:url(<?php the_post_thumbnail_url(); ?>); background-position:center; background-size:cover;">
		   
	   </div>
   </a>
 <?php }else{?>
                <img src="<?php echo content_url(); ?>/uploads/2020/02/sob.jpg" class="d-none d-md-block" width="176" height="193" alt="">
				<?php } ?>
                       
                    </div>
                    <div class="col-md-8">
                      <div class="card-text">
                        <h6><?php the_title(); ?> </h6>
                        <small> <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></small>
                        <p><?php the_excerpt(); ?>
                        
                        </p>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-outline btn-sm">Подробнее...</a> 
                      </div>
                    </div>
                  </div>
                  
           
            </div>
          </div>

              <?php endforeach; ?>

         

      
        </div>
        <div class="col-md-6">
         
              <h5>Новости</h5>
              <?php
            $posts = get_posts( array(
              'numberposts' => 5,
              'category'    => 1,
              'orderby'     => 'date',
              'order'       => 'DESC'));

              foreach ($posts as $post):
                
               ?>
              <div class="card news">
                <div class="card-body">
                  <div class="row no-gutters">
                    <div class="col-md-4 text-center">
                       <?php if ( has_post_thumbnail()) { ?>
   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
   
	   <div  class="mobile-d-none d-none d-md-block" style="width:167px; height:193px; background:url(<?php the_post_thumbnail_url(); ?>); background-position:center; background-size:cover;">
		   
	   </div>
   </a>
 <?php }else{?>
                <img src="<?php echo content_url(); ?>/uploads/2020/02/novoe.jpg" class="d-none d-md-block" width="176" height="193" alt="">
				<?php } ?>
                    </div>
                    <div class="col-md-8">
                      <div class="card-text">
                        <h6><?php the_title(); ?> </h6>
                        <small> <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></small>
                        
                        <p><?php the_excerpt(); ?>
                        
                        </p>
                        <a href="<?php echo get_permalink(); ?>" class="btn btn-outline">Подробнее...</a>
                      </div>
                    </div>
                  </div>
                  
           
            </div>
          </div>

              <?php endforeach; ?>
              

          

      
            
        </div>
      </div>
      <div class="text-center">
        <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="btn big mt-5 mx-auto mb-5">Перейти к блогу</a>
      </div>
    
    </div>
  </section>