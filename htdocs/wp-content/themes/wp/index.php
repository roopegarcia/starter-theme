<?php get_header();

  while(have_posts()) {
    the_post(); ?>
    <h2><a href="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
    <?php the_content(); ?>
  <?php }

  get_footer();

?>