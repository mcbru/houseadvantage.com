<?php
/**
 *
 * The template for displaying the About Us page
 *
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>


<header class="hero" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
  <div class="hero__image  hero__image--gray-3">
  </div>
</header>


<div role="main">

<div class="[ band  band--small-bottom ]">
  <div class="row  column">
  <div <?php post_class('lede'); ?>>
      <?php
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      ?>
    </div>
  </div>
</div>

  <?php
    $post_type = 'team';
    $team_args = array(
      'orderby'          => 'menu_order',
      'order'            => 'ASC',
      'post_type'        => $post_type,
      'post_status'      => 'publish',
      'caller_get_posts' => 1
    );
    $teammates_query = new WP_Query($team_args);
    if($teammates_query->have_posts()) {
      // $count = 0;
      while ($teammates_query->have_posts()) : $teammates_query->the_post(); $c++; ?>
      <section class="[ band <?php if ($c % 2 == 0) echo 'band--tint'; ?> ]">
        <?php get_template_part( 'content', 'teammate' ); ?>
      </section>
      <?php
      endwhile;
    } // END if have_posts loop
    wp_reset_query();
  ?>
</div>

<div class="cta">
  <div class="row  column">
    <div class="cta__head">
      Empower your customers
    </div>
    <div class="cta__subhead">
      Let customers manage experiences through a variety of self-service interfaces.
    </div>
    <a href="contact" class="button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Learn More »</a>
  </div>
</div>

 <?php get_footer();
