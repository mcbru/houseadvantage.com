<?php
/**
 *
 * The template for displaying the HALo Web page
 *
 */

get_header(); ?>

<header class="hero  hero--pattern-1" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__text"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__text"><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
</header>

<?php /*
<?php while ( have_posts() ) : the_post(); ?>
<section class="intro" role="main">
  <div class="fp-intro">

    <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
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

  </div>

</section>
<?php endwhile;?>
 */ ?>

<section class="band">
  <div class="row">
    <div class="large-6  column">
      <p>Leverage your existing web presence by deploying secure patron portals to your existing web sites. HALo Web allows real-time access to member data and extends the reach of loyalty programs to wherever and whenever the patron wishes. HALo Web allows operators to integrate web portals in HALO CORE or their casino management system, enabling patrons to access information about their loyalty program, profile, tier, balances and offers.</p>
      <p>Access to this data is secured through the same security credentials loyalty members use to access the casino management system: Member ID and PIN.</p>
    </div>
    <div class="large-6  column">
    <?php foundationpress_product_nav(); ?>
    <?php /*
      <img src="<?php bloginfo('template_url'); ?>/assets/images/abstract-48322126.jpg" alt="" />
     */ ?>
      <!-- <img src="<?php bloginfo('template_url'); ?>/assets/images/hands&#45;coding&#45;1.jpg" alt="" /> -->
      <!-- <img class="thumbnail" src="http://placehold.it/500x500"> -->
    </div>
  </div>
</section>


<?php get_footer();
