<?php
/**
 *
 * The template for displaying the The House Advantage page
 *
 */

 get_header(); ?>
 <?php get_template_part( 'template-parts/featured-image' ); ?>
<header class="hero" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__text"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__text"><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
</header>

<!-- <div role="main"> -->
<!-- <div class="band  band&#45;&#45;huge  band&#45;&#45;tint  text&#45;center"> -->
<!--   <div class="row  column"> -->
<!--     <h1>Why House Advantage?</h1> -->
<!--     <p class="lead">House Advantage stands behind some of the most successful companies in the gaming, resort, and entertainment industries.</p> -->
<!--     <!&#45;&#45; <a href="#" class="button large hollow">CTA</a> &#45;&#45;> -->
<!--   </div> -->
<!-- </div> -->

<div id="stat-animate" class="[ band  band--special-dark ]">
  <div class="row  column  text-center">
    <h2>The HALo Platform</h2>
    <p>Our flagship product HALo is an always evolving, proven loyalty management platform with over 120 installations across 70 markets, including some of the largest integrated resorts in the U.S. and Asia.  It supports an aggregate database of over 100 million customer profiles.
    <div class="medium-4  columns" data-equalizer-watch>
      <!-- <img class="thumbnail" src="http://placehold.it/250x150?text=100,000"> -->
      <span id="number-games" class="stat">0</span>
      <p class="text-justify">Manages more than 100,000 slot and table games, processing every gaming rating, capturing customer spend, and calculating, publishing and redeeming earned rewards in real time.</p>
    </div>
    <div class="medium-4  columns" data-equalizer-watch>
      <!-- <img class="thumbnail" src="http://placehold.it/250x150?text=50,000"> -->
      <span id="number-hotels" class="stat">0</span>
      <p class="text-justify">Manages nearly 50,000 hotels rooms, tracking and rewarding customer hotel, spa, and retail spend.</p>
    </div>
    <div class="medium-4  columns" data-equalizer-watch>
      <!-- <img class="thumbnail" src="http://placehold.it/250x150?text=300"> -->
      <span id="number-food" class="stat">0</span>
      <p class="text-justify">Integrates over 300 food and beverage operations, allowing customers to earn and redeem rewards directly through point of sale systems.</p>
    </div>
  </div>
</div>

<div class="band  band--tint  text-center">
  <div class="row  column">
    <h2>Don’t take our word for it.</h2>
    <p class="lead"> Here’s what our customers say about House Advantage.</p>
  </div>
  <div class="row">
    <div class="medium-6  columns" data-equalizer-watch>
      <blockquote>
        Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras mattis consectetur purus sit amet fermentum.
        <cite>Nibh Mollis</cite>
      </blockquote>
    </div>
    <div class="medium-6  columns" data-equalizer-watch>
      <blockquote>
        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
        <cite>Magna Malesuada</cite>
      </blockquote>
    </div>
  </div>
  <div class="row">
    <div class="medium-6  columns" data-equalizer-watch>
      <blockquote>
        Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
        <cite>Nibh Mollis</cite>
      </blockquote>
    </div>
    <div class="medium-6  columns" data-equalizer-watch>
      <blockquote>
        Donec ullamcorper nulla non metus auctor fringilla. Curabitur blandit tempus porttitor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.
        <cite>Venenatis Egestas</cite>
      </blockquote>
    </div>
</div>
</div>
 <?php /*
 <?php while ( have_posts() ) : the_post(); ?>
   <article <?php post_class('main-content') ?> id="post-<?php the_ID(); ?>">
       <header>
           <h1 class="entry-title"><?php the_title(); ?></h1>
       </header>
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
   </article>
 <?php endwhile;?>

 <?php get_sidebar(); ?>
    */ ?>

</div>

 <?php get_footer();
