<?php 

/* 
  Template Name: Home Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">


      <!-- ========== WELCOME SECTION ========== -->
      
      <a name="welcome"></a>
      <section class="welcome clearfix">
        <div class="wrapper clearfix">

          <div class="welcome-left">
          <h2>Welcome!</h2>

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <p><?php the_field('site_introduction'); ?></p>
          <?php endwhile; // end of the loop. ?>
          
          </div>

          <div class="welcome-image">
        <!--     <img src="<?php bloginfo('template_directory'); ?>/images/youngmindsflowers.jpg" alt="a child holding yellow flowers"> -->
          </div>
          
        </div><!-- /.wrapper -->
        <div class="welcome-accent accent-right accent"></div>
      </section><!-- /.welcome -->
      
    
      <!-- ===== THE STAFF SECTION ==== -->

      <a name="about"></a>
      <section class="staff">
        <div class="staff-accent accent-left accent"></div>

        <div class="wrapper clearfix">
          
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h2><?php the_field('about_us_title'); ?></h2>
          <?php endwhile; // end of the loop. ?>

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <p><?php the_field('about_us_intro'); ?></p>
          <?php endwhile; // end of the loop. ?>
          
          <?php while( has_sub_field('staff') ): ?><!-- iow, while the field "staff" has sub-fields, then... -->
            <div class="staff-unit clearfix">
              <div class="headshot-box clearfix">
                
                <?php $headshot = get_sub_field('staff_headshot'); ?>
                <img class="headshot headshot-default" src="<?php echo $headshot['sizes']['square']; ?>" /><!-- the staff headshot -->

                <?php $headshotHover = get_sub_field('headshot_hover'); ?>
                <img class="headshot headshot-hover" src="<?php echo $headshotHover['sizes']['square']; ?>" /><!-- the staff headshot - hover -->
                
              </div>
              <p class="bio"><?php the_sub_field('staff_profile'); ?></p><!--- the staff profile -->
            </div><!-- /.staff-unit -->

          <?php endwhile; ?><!-- end of while statement -->
       
        </div><!-- /.wrapper -->
      </section><!-- /.staff -->

      <!-- ========== ABOUT US SECTION CONTINUES ========== -->
      <section class="about-us">

        <div class="about-us-accent accent-right accent"></div>
        <div class="wrapper clearfix">
          
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h2><?php the_field('how_we_began_title'); ?></h2>
            <p><?php the_field('how_we_began_text'); ?></p>
            <h2><?php the_field('our_vision_title'); ?></h2>
            <p><?php the_field('our_vision_text'); ?></p>
          <?php endwhile; // end of the loop. ?>
          
        </div><!-- /.wrapper -->
      </section> <!-- /.about-us -->

      <!-- DIVIDER -->

      <section class="divider divider1"></section>

      <!-- ========== PROGRAMS SECTION ========== -->

      <a name="programs"></a>
      <section class="programs">
        <!-- <div class="programs-accent accent-left accent"></div> -->
        <div class="wrapper clearfix">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h2><?php the_field('programs_title'); ?></h2>
          <?php endwhile; // end of the loop. ?>

          <?php while( has_sub_field('programs') ): ?><!-- iow, while the field "programs" has sub-fields, then... -->

            <div class="program-item-box">
              <div class="program-name-box">
                <i class="fa fa-plus-circle"></i>
                <i class="fa fa-minus-circle"></i>
                <h3><?php the_sub_field('program_name'); ?></h3>
              </div>

              <div class="program-description hide-show">
                <?php the_sub_field('program_description'); ?>

                <?php 
                $programApplication = get_sub_field('program_application'); 
                if($programApplication) { ?>
                  <a class="application-form" href="<?php echo $programApplication["url"]; ?>" download>DOWNLOAD APPLICATION</a> 
                <?php } ?>

              </div>

            </div>
          <?php endwhile; ?><!-- end of while statement -->
        </div><!-- /.wrapper -->
      </section><!-- /.programs -->
          
      <!-- DIVIDER -->

      <div class="divider divider2"></div>

      <!-- ========== APPLY SECTION ========== -->
      
      <a name="apply"></a>
      <section class="apply">
        <div class="apply-accent accent-right accent"></div>

        <div class="wrapper clearfix">
          
          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h2><?php the_field('apply_title'); ?></h2>
          <?php endwhile; // end of the loop. ?>

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <p><?php the_field('apply_intro'); ?></p>
          <?php endwhile; // end of the loop. ?>  
                
          <?php while( has_sub_field('apply_program') ): ?><!-- iow, while the field has sub-fields, then... -->
            <?php $application = get_sub_field('apply_program_application'); ?>
            <a class="apply-application" href="<?php echo $application["url"]; ?>" download><?php the_sub_field('apply_program_name'); ?></a>
          <?php endwhile; ?><!-- end of while statement -->
          
        </div><!-- /.wrapper -->

      </section><!-- /.apply -->

      <!-- ========== CONSULTING SECTION ========== -->

      <a name="consulting"></a>
      <section class="consulting">

        <div class="consulting-accent accent-left accent"></div>
        <div class="wrapper clearfix">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h2><?php the_field('consulting_title'); ?></h2>
          <?php endwhile; // end of the loop. ?>

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <p><?php the_field('consulting_text'); ?></p>
          <?php endwhile; // end of the loop. ?>  
        
        </div><!-- /.wrapper -->
      </section><!-- /.consulting -->

      <!-- DIVIDER -->

      <div class="divider divider3"></div>

      <!-- ========= FAQ SECTION ========== -->
      
      <a name="faq"></a>
      <section class="faq">  
        <!-- <div class="faq-accent accent-right accent"></div> -->
        <div class="wrapper clearfix">

          <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
            <h2><?php the_field('faq_title'); ?></h2>
          <?php endwhile; // end of the loop. ?>
            
          <?php while( has_sub_field('faq_item') ): ?><!-- iow, while the field "faq-item" has sub-fields, then... -->
            <div class="faq-item-box">
              <div class="faq-question-box">
                <i class="fa fa-plus-circle"></i>
                <i class="fa fa-minus-circle"></i>
                <p class="question"><?php the_sub_field('question'); ?></p><!-- show the subfield called "question" -->
              </div>

              <p class="faq-answer hide-show"><?php the_sub_field('answer'); ?></p><!-- show the sub-field called "answer" -->
            </div><!-- /.faq-item-box -->
          <?php endwhile; ?><!-- end of while statement -->
        
        </div><!-- /.wrapper -->  
      
      </section><!-- /.faq -->

      <!-- ========== CONTACT SECTION ========== -->

      <a name="contact"></a>
      <section class="contact clearfix">
      
      <div class="address">
        <h2>Get in touch!</h2>
        <p>You can get in touch with us by email at <a class="contact-email" href="mailto:johanna@youngminds.ca"> johanna(at)youngminds.ca</a> or by using the contact form below.</p>
        <p>We are located at:</p>
        <p>85 Eastwood Road</p>
        <p>Toronto, ON</p>

      </div>
      <div class="map"></div>
        
      </section><!-- /.contact -->

      <section class="contact-form clearfix">

        <h2>Drop us a line!</h2>
        <p class="email-link">Fill out the form below or email us at <a class="contact-email" href="mailto:johanna@youngminds.ca">johanna(at)youngminds.ca</a>!</p>
          <?php echo do_shortcode( '[contact-form-7 id="80" title="Young Minds Contact Form"]' ); ?>
      </section> <!-- /.contact -->

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>