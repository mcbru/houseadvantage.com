<?php
/**
 *
 * Template Name: Product Detail
 *
 */

get_header(); ?>

<header class="hero" role="banner">
  <div class="row  column">
    <h1><?php wp_title(''); ?></h1>
    <p><?php echo get_post_meta($post->ID, 'hero_subhead', true); ?></p>
  </div>
  <div class="hero__image  hero__image--red-1">
  </div>
</header>

<?php while ( have_posts() ) : the_post(); ?>
<section class="band" role="main">
  <div class="row">
    <div <?php post_class('large-8  column') ?> id="post-<?php the_ID(); ?>">
      <?php do_action( 'foundationpress_page_before_entry_content' ); ?>
      <div class="entry-content">
        <?php the_content(); ?>
      </div>
      <footer>
        <?php wp_link_pages( array('before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ), 'after' => '</p></nav>' ) ); ?>
        <p><?php the_tags(); ?></p>
      </footer>
      <?php do_action( 'foundationpress_page_before_comments' ); ?>
      <?php comments_template(); ?>
      <?php do_action( 'foundationpress_page_after_comments' ); ?>
    </div>
    <div class="large-4  column">
      <?php foundationpress_product_nav(); ?>
    </div>
  </div>

</section>
<?php endwhile;?>

<?php get_footer();
