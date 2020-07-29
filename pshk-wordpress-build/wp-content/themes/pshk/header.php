<!DOCTYPE html>
<html lang="ru">
  <head>
  
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/libs.min.css"><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fork-awesome@1.1.7/css/fork-awesome.min.css" integrity="sha256-gsmEoJAws/Kd3CjuOQzLie5Q3yshhvmo7YNtBG7aaEY=" crossorigin="anonymous">
	  
	  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <meta charset="UTF-8"/>
    <meta name="description" content="<?php echo get_bloginfo('description', 'raw' ) ;?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?php echo get_bloginfo('name', 'raw' ) ;?><?php echo wp_title( '&raquo;', true, '' );?></title>
  
  </head>
  <body>
    
    <nav class="navbar navbar-expand-sm  header-menu sticky-top">
		<?php echo do_shortcode('[bvi text=" "]'); ?>
      <div class="container align-items-center">
        <a href="<?=home_url()?>" class="navbar-brand">Пашковский <br> Сельскохозяйственный <br> Колледж</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
		 
      <?php 
    wp_nav_menu([
      'theme_location' => 'primary',
      'menu_class' => 'nav navbar-nav ',
      'depth' => 0,
      'walker' => new bs4Navwalker,
      
    ]); 
      ?>

        <div class="header-phones">
          <ul>
            
            <div class="row align-items-center">
              <div class="col-3" style="padding-right: 0px;">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/header-phones.png" alt="">
              </div>
              <div class="col-9" style="margin-left: 0; padding-left: 0;">
                <li><span>Приемная комиссия</span> <phone>8 (861) 237-48-37</phone></li>
            <li><span>Приемная директора</span> <phone>8 (861) 237-48-37</phone></li>
              </div>
            </div>
            
          </ul>
        </div>

      </div>

      </div>
    </nav><header>
    <nav class="navbar navbar-expand-lg subnav">
		<div class="container-fluid">
			
		
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#subnavContent" aria-controls="subnavContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="subnavContent">
		  
      <?php 
    wp_nav_menu([
      'theme_location' => 'secondary',
      'menu_class' => 'nav navbar-nav',
      'container_class' => '',
      'depth' => 0,
      'walker' => new bs4Navwalker,
      
    ]); 
      ?>
       </div>
      </div>
    </nav>
  
  </header>
  <main>