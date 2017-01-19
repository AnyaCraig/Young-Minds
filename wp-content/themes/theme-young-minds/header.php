<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

  <?php // Load our CSS ?>
  <!-- FONT AWESOME -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.2/css/font-awesome.min.css">
  <!-- GOOGLE FONTS -->
  <link href='https://fonts.googleapis.com/css?family=Satisfy|Nothing+You+Could+Do|Quicksand:400,700' rel='stylesheet' type='text/css'>
  <!-- ANIMATE.CSS -->
  <link rel="stylesheet" type="text/css" href="animate.css">
  <!-- STYLES -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>
  

  <a name="home"></a>
  <header>

    <!-- <h1>
      <a href="<?php echo home_url( '/' ); ?>" title="<?php bloginfo( 'name', 'display' ); ?>" rel="home">
        <?php bloginfo( 'name' ); ?>
      </a>
    </h1> -->

  <!-- ========== HERO SECTION ========== -->

    <section class="hero clearfix">

      <div class="heading-one clearfix">
        <h1>Welcome to Young Minds!</h1>
        <!-- <img src="<?php bloginfo('template_directory'); ?>/images/sproutwhitegreen.png" alt="a bouncing sprout icon" class="sprout-bounce"> -->
        <a href="#welcome">
          <i id="bounce-sprout" class="fa fa-pagelines shake animated infinite" aria-hidden="true"></i>
        </a>
      </div><!-- /.heading-one --> 

    </section><!-- /.hero -->

  </header><!--/.header-->

  <nav class="header-nav">
    <div class="nav-left">
      <img src="<?php bloginfo('template_directory'); ?>/images/YoungMindsWhite.png" alt="The Young Minds logo" class="logo">
    </div><!-- /.nav-left -->

    <!-- the hamburger menu -->
    
    <div class="menu-dropdown">
      <i class="fa fa-bars"></i>
      <div class="nav-menu-hamburger">
        
        <?php wp_nav_menu( array(
          'container' => false,
          'theme_locations' => 'primary'
        )); ?>

      </div>
    </div>


    <div class="nav-menu">
  
      <?php wp_nav_menu( array(
        'container' => false,
        'theme_locations' => 'primary'
      )); ?>

    </div>

  </nav>



