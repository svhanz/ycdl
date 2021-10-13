<?php get_header(); ?>
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri(  ) . '/images/27horowitz2-jumbo-v2.jpg ' ?>" alt="jumbo" />
    </div>
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri(  ) . '/images/dog_terrier_mix_272830.jpg' ?>" alt="terrier" />
    </div>
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri(  ) . '/images/dogs_dog_animal_215598.jpg' ?>" alt="dog" />
    </div>
  </div>
  <!--==Add Pagination==-->
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<?php get_footer(); ?>