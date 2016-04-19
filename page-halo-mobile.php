<?php
/**
 *
 * The template for displaying the HALo Mobile page
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
    <div class="large-9  column">
      <p>HALo Mobile enables your employees to more easily manage patron enrollment and access patron data directly on iOS and Android mobile devices. The app provides secure mobile access to all loyalty program management transactions and functionality across the enterprise.</p>
      <p>With HALo Mobile, your frontline employees can provide better and more immediate patron support by:</p>
      <ul>
        <li>Enrolling new members into your loyalty club right on the floor</li>
        <li>Verifying legal age by scanning driver’s license bar codes</li>
        <li>Viewing, updating, and adjusting patron profiles, buckets and tiers</li>
        <li>Developing patrons through issuing comps and incentives</li>
        <li>Performing enterprise member searches</li>
        <li>Accessing account history and member club functions</li>
        <li>Contact management</li>
      </ul>
      <p>HALo Mobile puts the patron, program and performance data necessary to serve your members directly in the hands of the employees empowered to support your operations.</p>
    </div>
    <div class="large-3  column">
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
