<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<header class="hero  hero--gold-3  text-center" role="banner">
  <div class="row  column">
      <?php foundationpress_entry_meta(); ?>
    <h1 class="hero__text">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
  </div>
</header>

<div class="band  row  column  medium-10  large-8  small-centered" role="main">
  <?php do_action( 'foundationpress_before_content' ); ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_post_before_entry_content' ); ?>
      <div class="entry-content">

      <?php
        if ( has_post_thumbnail() ) :
          the_post_thumbnail();
        endif;
      ?>

      <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
        <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_post_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_post_after_comments' ); ?>
    </article>
  <?php endwhile;?>

  <?php do_action( 'foundationpress_after_content' ); ?>
  <?php /* get_sidebar(); */ ?>
</div>

<?php get_footer();
