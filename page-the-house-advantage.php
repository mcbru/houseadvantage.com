<?php
/**
 *
 * The template for displaying the The House Advantage page
 *
 */

 get_header(); ?>
 <?php get_template_part( 'template-parts/featured-image' ); ?>
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
    <p class="lede">Our flagship product HALo is an always evolving, proven loyalty management platform with over 120 installations across 70 markets, including some of the largest integrated resorts in the U.S. and Asia.  It supports an aggregate database of over 100 million customer profiles.
    <div class="medium-4  columns" data-equalizer-watch>
      <!-- <img class="thumbnail" src="http://placehold.it/250x150?text=100,000"> -->
      <span class="feature-icon-regular">
        <span class="icon">
          <svg class="icon__item--purple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M106.15,55.05L96.09,26.18a6.41,6.41,0,0,0-8.17-3.95L59,32.29a6.42,6.42,0,0,0-3.95,8.17L65.16,69.33a6.41,6.41,0,0,0,8.17,3.95L102.2,63.22a6.41,6.41,0,0,0,3.95-8.17h0ZM68.65,44.93A3.77,3.77,0,1,1,71,40.13a3.77,3.77,0,0,1-2.32,4.8h0Zm6.83,19.6a3.77,3.77,0,1,1,2.32-4.8,3.77,3.77,0,0,1-2.32,4.8h0ZM88.25,38.1a3.77,3.77,0,1,1,2.32-4.81,3.77,3.77,0,0,1-2.32,4.81h0Zm6.83,19.6a3.77,3.77,0,1,1,2.32-4.8,3.78,3.78,0,0,1-2.32,4.8h0Z"/><path d="M48.48,52.72H17.91a6.42,6.42,0,0,0-6.42,6.42V89.71a6.42,6.42,0,0,0,6.42,6.42H48.48a6.42,6.42,0,0,0,6.42-6.42V59.14a6.42,6.42,0,0,0-6.42-6.42h0ZM22.82,88.58a3.77,3.77,0,1,1,3.77-3.77,3.77,3.77,0,0,1-3.77,3.77h0Zm0-20.76A3.77,3.77,0,1,1,26.59,64a3.77,3.77,0,0,1-3.77,3.77h0Zm10.38,11A3.77,3.77,0,1,1,37,75.05a3.77,3.77,0,0,1-3.77,3.77h0Zm10.38,9.75a3.77,3.77,0,1,1,3.77-3.77,3.77,3.77,0,0,1-3.77,3.77h0Zm0-20.76A3.77,3.77,0,1,1,47.35,64a3.77,3.77,0,0,1-3.77,3.77h0Z"/></svg>
        </span>
      </span>
      <span id="number-games" class="stat">0</span>
      <p class="text-justify">Manages more than 100,000 slot and table games, processing every gaming rating, capturing customer spend, and calculating, publishing and redeeming earned rewards in real time.</p>
    </div>
    <div class="medium-4  columns" data-equalizer-watch>
      <!-- <img class="thumbnail" src="http://placehold.it/250x150?text=50,000"> -->
      <span class="feature-icon-regular">
        <span class="icon">
          <svg class="icon__item--purple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M53.29,55.19H49.49a1.9,1.9,0,1,1,0-3.81h3.81A1.9,1.9,0,0,1,53.29,55.19Z"/><path d="M68.51,55.19H64.71a1.9,1.9,0,0,1,0-3.81h3.81A1.9,1.9,0,1,1,68.51,55.19Z"/><path d="M59,81.83c-9.38,0-17.71-7.57-21.17-19-3.14-.19-5.47-4.21-5.47-9.51,0-4.37,1.59-7.87,3.91-9.07-0.06-2.23-.11-5.81-0.11-6.15a1.9,1.9,0,0,1,3.81,0c0,0.88.1,6.84,0.15,7.46a1.92,1.92,0,0,1-.55,1.53,2,2,0,0,1-1.53.55H38c-0.54.21-1.82,2.2-1.82,5.69C36.17,57,37.6,59,38.07,59a2,2,0,0,1,1.78-.19A1.93,1.93,0,0,1,41,60.07c2.66,10.74,9.88,18,18,18s15.3-7.22,18-18a1.9,1.9,0,0,1,2.85-1.16c0.66,0.12,2-1.95,2-5.62,0-3.49-1.28-5.49-1.82-5.69H80a2,2,0,0,1-1.54-.55,1.92,1.92,0,0,1-.54-1.54c0.06-.6.16-6.57,0.16-7.44a1.9,1.9,0,0,1,3.81,0c0,0.35,0,4-.11,6.26,2.4,1.26,3.91,4.7,3.91,9,0,5.29-2.34,9.32-5.47,9.51C76.71,74.26,68.38,81.83,59,81.83Z"/><path d="M40.36,80.71a1.91,1.91,0,0,1-1.68-2.79l3.42-6.48a1.9,1.9,0,1,1,3.37,1.78L42,79.69A1.92,1.92,0,0,1,40.36,80.71Z"/><path d="M77.64,80.71a1.9,1.9,0,0,1-1.68-1l-3.42-6.48a1.9,1.9,0,1,1,3.37-1.78l3.42,6.48a1.9,1.9,0,0,1-.8,2.57A1.86,1.86,0,0,1,77.64,80.71Z"/><path d="M81.54,21.84C81.33,21.49,76,13.33,59,13.33s-22.33,8.16-22.54,8.51a1.88,1.88,0,0,0-.29,1V38.07a1.9,1.9,0,0,0,1,1.68c0.31,0.16,7.72,4,21.82,4s21.52-3.87,21.82-4a1.9,1.9,0,0,0,1-1.68V22.85A1.88,1.88,0,0,0,81.54,21.84Zm-6.73,4.72a54.77,54.77,0,0,1-15.82,2,54.77,54.77,0,0,1-15.82-2,1.9,1.9,0,0,1,1.19-3.62A52.4,52.4,0,0,0,59,24.75a52.48,52.48,0,0,0,14.63-1.81A1.9,1.9,0,0,1,74.82,26.56Z"/><path d="M88.06,80.41L78.27,77a1.92,1.92,0,0,0-2,.51C71.44,82.75,65.32,85.64,59,85.64s-12.44-2.88-17.24-8.12a1.91,1.91,0,0,0-2-.51l-9.79,3.41C19.7,84,13.33,92.54,13.33,102.76a1.9,1.9,0,0,0,1.9,1.9h87.53a1.9,1.9,0,0,0,1.9-1.9C104.67,92.54,98.3,84,88.06,80.41ZM53.29,97.06a1.9,1.9,0,1,1,1.9-1.9A1.9,1.9,0,0,1,53.29,97.06Zm11.42,0a1.9,1.9,0,1,1,1.9-1.9A1.9,1.9,0,0,1,64.71,97.06Z"/><path d="M59,72.32c-5.3,0-7-2.33-7.32-2.8a1.9,1.9,0,0,1,3.17-2.1c0.1,0.11,1.1,1.1,4.15,1.1,3.21,0,4.15-1.09,4.16-1.1a1.86,1.86,0,0,1,2.59-.56,2,2,0,0,1,.57,2.67C66,70,64.3,72.32,59,72.32Z"/></svg>
        </span>
      </span>
      <span id="number-hotels" class="stat">0</span>
      <p class="text-justify">Manages nearly 50,000 hotels rooms, tracking and rewarding customer hotel, spa, and retail spend.</p>
    </div>
    <div class="medium-4  columns" data-equalizer-watch>
      <!-- <img class="thumbnail" src="http://placehold.it/250x150?text=300"> -->
      <span class="feature-icon-regular">
        <span class="icon">
          <svg class="icon__item--purple" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 118 118"><path d="M59,29.08c-12.11,0-38.72,2.64-38.72,22H97.72C97.72,31.72,71.11,29.08,59,29.08Z"/><path d="M59,88.92c12.11,0,38.72,0,38.72-14.08H20.28C20.28,88.92,46.89,88.92,59,88.92Z"/><path d="M97.72,60.76H95.08c-2.33,0-5.42,1.91-8.41,3.75-3.48,2.14-6.77,4.17-10.07,4.17-2.81,0-6.09-1.5-9.87-3.24-4.78-2.19-10.2-4.68-15.65-4.68H20.28a5.28,5.28,0,0,0,0,10.56H97.72A5.28,5.28,0,0,0,97.72,60.76Z"/><path d="M16.76,58.12H51.08a31.37,31.37,0,0,1,11.54,2.64h0c0.71,0.29,1.41.58,2.1,0.88l0,0c2.55,1.11,4.91,2.27,7,3.12l0.11,0c0.43,0.17.86,0.34,1.27,0.48l0.05,0c0.38,0.13.74,0.24,1.09,0.34l0.17,0.05q0.52,0.14,1,.22l0.19,0a7,7,0,0,0,1,.08A6,6,0,0,0,77.51,66l0.18,0a8.86,8.86,0,0,0,.92-0.22l0.16-.05c0.31-.1.62-0.21,0.93-0.33l0.07,0c0.34-.14.68-0.3,1-0.46L81,64.76c2.12-1.05,4.39-2.58,6.65-3.9,2.55-1.5,5.11-2.74,7.47-2.74h6.16a1.76,1.76,0,1,0,0-3.52H16.76A1.76,1.76,0,0,0,16.76,58.12Z"/></svg>
        </span>
      </span>
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
