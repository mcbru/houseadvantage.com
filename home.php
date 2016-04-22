<?php
/**
 * Template Name: Blog Posts
 *
 */

get_header(); ?>

<header class="hero  hero--gold-3" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__text"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__text"><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
</header>

<div class="band" role="main">
  <div class="row">
    <div class="medium-9  column">
      <article class="main-content">
      <?php if ( have_posts() ) : ?>

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
        <?php endwhile; ?>

        <?php else : ?>
          <?php get_template_part( 'template-parts/content', 'none' ); ?>

        <?php endif; // End have_posts() check. ?>

        <?php /* Display navigation to next/previous pages when applicable */ ?>
        <?php if ( function_exists( 'foundationpress_pagination' ) ) { foundationpress_pagination(); } else if ( is_paged() ) { ?>
          <nav id="post-nav">
            <div class="post-previous"><?php next_posts_link( __( '&larr; Older posts', 'foundationpress' ) ); ?></div>
            <div class="post-next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'foundationpress' ) ); ?></div>
          </nav>
        <?php } ?>

      </article>
    </div>
    <!-- <div class="medium&#45;3  column"> -->
      <?php /* get_sidebar(); */ ?>
    <!-- </div> -->
  </div>

</div>

<?php get_footer();
