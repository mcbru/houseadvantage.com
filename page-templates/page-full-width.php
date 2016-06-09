<?php
/*
Template Name: Full Width
*/

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>

<div id="page-full-width" class="band  row  column  small-10  large-8  small-centered" role="main">
  <?php while ( have_posts() ) : the_post(); ?>
    <article>
      <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </header>
      <div class="entry-content">

      <?php
        if ( has_post_thumbnail() ) :
          the_post_thumbnail();
        endif;
      ?>

      <?php the_content(); ?>
      <?php if ( get_field('post_credit') ) : ?>
        <p class="post-credit"><?php the_field('post_credit'); ?></p>
      <?php endif; ?>
      </div>
    </article>
  <?php endwhile;?>

</div>

<?php get_footer();
