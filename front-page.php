<?php get_header(); ?>
<div class="swiper">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri(  ) . 'images/dog_terrier_mix_272830.jpg' ?>" alt="Audi_R8" />
    </div>
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri(  ) . 'images/AudiQ5_Boredoms_Cure.jpeg' ?>" alt="AudiQ5" />
    </div>
    <div class="swiper-slide">
      <img src="<?php echo get_template_directory_uri(  ) . 'images/AudiR8_Crazy_Fast.jpeg' ?>" alt="AudiR8" />
    </div>

  </div>

  <!--==Add Pagination==-->
  <div class="swiper-pagination"></div>
  <!-- Add Arrows -->
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>

<?php get_footer(); ?>