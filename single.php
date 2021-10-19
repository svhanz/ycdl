<?php get_header();?>
<section class="section__blog-wrap">
  <div class="container">
    <?php
while (have_posts()) { 
	the_post();
	?>
    Вывод контента...
    <h6>сука</h6>
    <h1><?php the_title(); ?></h1>
    <?php
}
?>

    <?php get_footer(); ?>