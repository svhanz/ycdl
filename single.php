<?php get_header();?>
<section class="section__blog-wrap">
  <div class="container">
    <?php
    while ( have_posts() ) :
        the_post();
        get_template_part( 'template-parts/content', get_post_type() );
        endif;
    endwhile; // End of the loop.
    ?>
  </div>
</section>
<h6>сука</h6>
<?php get_footer();?>