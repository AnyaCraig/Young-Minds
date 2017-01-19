<?php 

/* 
  Template Name: FAQ Page
*/

get_header();  ?>

<div class="main">
  <div class="container">
    <div class="content">
      <p>YOUNG MINDS</p>

      <?php while( has_sub_field('faq_item') ): ?>
          <p><?php the_sub_field('question'); ?></p>
          <p><?php the_sub_field('answer'); ?></p>
      <?php endwhile; ?>

    </div> <!-- /.content -->
  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>