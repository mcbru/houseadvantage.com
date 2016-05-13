<?php
/**
 *
 * The template for displaying the HALo Core page
 *
 */

get_header(); ?>

<header class="hero  hero--pattern-1" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p><?php the_field('hero_subhead'); ?></p>
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
      <p>HALo Core offers great flexibility for managing your patron loyalty program. It allows operators to manage a unified card-based loyalty program across the enterprise, integrating transactional data across multiple systems. HALo Core works with your management systems to enhance, augment or replace your current marketing functionality for increased brand awareness and revenue growth. In addition, it can be decoupled from your existing management system, enabling you to manage individual programs across gaming and non-gaming areas of your business.</p>
      <p>HALo CORE is licensed for use in gaming loyalty programs across a geographically diverse set of markets via state and local regulatory bodies.</p>
      <p>HALo allows operators to:</p>
      <ul>
        <li>Operate a single card loyalty program locally or enterprise wide.</li>
        <li>Centralize all patron data from the enterprise in real-time, determining how rewards are earned and by whom</li>
        <li>Extend brand loyalty across the enterprise by capturing and managing data in real-time, including spend, promotions and complimentaries.</li>
        <li>Influence patron behavior by managing tiers based on spend across the entire organization, not just gaming.</li>
      </ul>
    </div>
    <div class="large-3  column">
    <?php foundationpress_product_nav(); ?>
    <?php /*
      <img src="<?php bloginfo('template_url'); ?>/assets/images/abstract-48322126.jpg" alt="" />
      <img src="<?php bloginfo('template_url'); ?>/assets/images/hands-coding-1.jpg" alt="" />
      <img class="thumbnail" src="http://placehold.it/500x500">
     */ ?>
    </div>
  </div>
</section>


<?php get_footer();
