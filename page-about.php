<?php
/**
 *
 * The template for displaying the About Us page
 *
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>


<header class="hero  hero--dark  hero--red-1" role="banner">
  <div class="row  column">
  <?php /*
    <h1 class="hero__text"><?php wp_title(''); ?></h1>
   */ ?>

    <?php if ( get_field('hero_head') ) : ?>
      <h1 class="hero__text"><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p class="hero__text"><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
</header>


<div role="main">
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
      $count = 0;
      while ($teammates_query->have_posts()) : $teammates_query->the_post(); $c++; ?>
      <section class="[ band <?php if ($c % 2 == 0) echo 'band--tint'; ?> ]">
        <?php get_template_part( 'content', 'teammate' ); ?>
      </section>
      <?php
      endwhile;
    } // END if have_posts loop
    wp_reset_query();
  ?>
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
