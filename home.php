<?php
/**
 * Template Name: Blog Posts
 *
 */

get_header(); ?>

<header class="hero  hero--gold-3" role="banner">
  <div class="row  column">
      <?php foundationpress_entry_meta(); ?>
    <h1 class="hero__text">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
        <?php /*
    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__text"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__text"><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
         */ ?>
  </div>
</header>

<div class="band" role="main">
  <!-- <div class="row"> -->
    <!-- <div class="medium&#45;9  column"> -->
      <!-- <article class="main&#45;content"> -->
      <?php if ( have_posts() ) : ?>

      <div class="row  small-up-1  medium-up-2" data-equalizer data-equalize-by-row="true">

        <?php /* Start the Loop */ ?>
        <?php while ( have_posts() ) : the_post(); ?>

        <div class="column">
          <!-- <article class="main&#45;content"> -->
          <div class="post-list" data-equalizer-watch>
            <div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry, post-list__item'); ?>>
                <?php foundationpress_entry_meta(); ?>
                <h2>
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <?php /*
                <?php if(has_post_thumbnail()) :
                  the_post_thumbnail();
                else : ?>
                  <img src="http://placehold.it/1140x500" alt="" />
                <?php endif; ?>
                 */ ?>
              <?php /*
              <div class="entry-content">
                <?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
              </div>
              <footer>
                <?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
              </footer>
               */ ?>
            </div>
          </div>
            <!-- <hr /> -->
        </div>
          <?php /* get_template_part( 'template-parts/content', get_post_format() ); */ ?>
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

      <!-- </article> -->
    <!-- </div> -->
    <!-- <div class="medium&#45;3  column"> -->
      <?php /* get_sidebar(); */ ?>
    <!-- </div> -->
  <!-- </div> -->
    </div>


</div>

<?php get_footer();
