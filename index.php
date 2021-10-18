<!--==START HEADER==-->
<?php get_header();?>
<!--==END HEADER==-->
<!--==MAIN CONTENT==-->
<main>
  <!--==START SWIPER==-->
  <!--<div class="swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/27horowitz2-jumbo-v2.jpg" alt="jumbo" />
      </div>
      <div class="swiper-slide">
        <img src="images/dog_terrier_mix_272830.jpg" alt="terrier" />
      </div>
      <div class="swiper-slide">
        <img src="images/dogs_dog_animal_215598.jpg" alt="dog" />
      </div>
    </div>
  <!--==Add Pagination==-->
  <!--<div class="swiper-pagination"></div>
    <!--== Add Arrows ==-->
  <!--<div class="swiper-button-next"></div>-->
  <!--<div class="swiper-button-prev"></div>-->
  <!--</div>-->
  <!--==END SWIPER==-->
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

</main>
<!--==END MAIN==-->
<!--==START FOOTER==-->
<?php get_footer(); ?>
<!--==END FOOTER==-->