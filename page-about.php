<?php
/**
 *
 * The template for displaying the About Us page
 *
 */

 get_header(); ?>

 <?php get_template_part( 'template-parts/featured-image' ); ?>


<header class="hero  hero--dark  hero--abstract-2" role="banner">
  <div class="row  column">
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
      'order'            => 'ASC',
      'post_type'        => $post_type,
      'post_status'      => 'publish',
      'caller_get_posts' => 1
    ); // END $args
    $teammates_query = new WP_Query($team_args);
    if($teammates_query->have_posts()) {
      $count = 0;
      while ($teammates_query->have_posts()) : $teammates_query->the_post(); $c++; ?>
      <section class="[ band <?php if ($c % 2 == 0) echo 'band--tint'; ?> ]">
        <div id="post-<?php the_ID(); ?>" <?php post_class('teammate  row'); ?>>
          <div class="small-12  medium-2  column">
            <?php if(has_post_thumbnail()) :
              the_post_thumbnail('post_thumbnail', array('data-os-animation' => 'fadeIn', 'data-os-animation-delay' => '0s'));
            else : ?>
              <img alt="" class="thumbnail" src="http://fakeimg.pl/500x500">
            <?php endif; ?>
          </div>
          <div class="small-12  medium-10  column">
            <h2><?php the_title(); ?></h2>
            <?php if ( get_field('role') ) : ?>
              <h3><strong><?php the_field('role'); ?></strong></h3>
            <?php endif; ?>
            <?php the_content(); ?>
            <ul class="menu  icon-menu">
              <li><a href="https://www.linkedin.com/company/house-advantage-llc"><i class="fa  fa-linkedin-square"></i></a></li>
              <li><a href="https://twitter.com/houseadv"><i class="fa  fa-twitter-square"></i></a></li>
            </ul>
          </div>
        </div>
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
