<?php get_header();?>
<h6>Тут выводится всякая хрень при добавлении ее в "Записи"и это single.php</h6>
<section class="section__blog-wrap">
  <div class="container__blog-wrap">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </div>
</section>
<?php get_footer(); ?>