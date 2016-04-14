<?php
/**
 *
 * The template for displaying the Careers page
 *
 */
/*
Careers at House Advantage

Grow your skills and expand your horizons at House Advantage.

Are you looking for a job with high impact? Work that’s relevant, stimulating and meaningful, where you can learn new, marketable skills and expand your professional growth across a variety of disciplines?

House Advantage is a global company based in Las Vegas that develops leading edge loyalty program software that serves some of the world’s largest gaming and entertainment companies.  At House Advantage, you get to work closely with key marketing leaders who provide support and consultation on loyalty strategy, new product development, programs and direct patron campaigns.  We offer challenging, high-profile development opportunities for candidates looking to be part of something great.

Inquire about joining the House Advantage team at talent@houseadv.com.

[CTA button].
 */

get_header(); ?>

<header class="hero  hero--abstract-1" role="banner">
  <div class="row  column">
    <h1 class="hero__text">Careers at House Advantage</h1>
    <p class="hero__text">Grow your skills and expand your horizons at House Advantage.</p>
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
      <p>Are you looking for a job with high impact? Work that’s relevant, stimulating and meaningful, where you can learn new, marketable skills and expand your professional growth across a variety of disciplines?</p>
      <p>House Advantage is an international company based in Las Vegas that develops leading edge loyalty program software that serves some of the world’s largest gaming and entertainment companies. We offer challenging, high-profile development opportunities for candidates looking to be part of something great.</p>
      <p>Inquire about joining the House Advantage team at <a href="mailto:talent@houseadv.com">talent@houseadv.com</a>.</p>
      <a href="#" class="button">CTA</a>
    </div>
    <div class="large-6  column">
      <img class="thumbnail" src="http://placehold.it/500x500">
    </div>
  </div>
</section>


<?php get_footer();
