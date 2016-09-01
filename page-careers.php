<?php
/**
 *
 * The template for displaying the Careers page
 *
 */

get_header();

$jobs = get_field('open_positions');

?>

<header class="hero" role="banner">
  <div class="row  column">
    <?php if ( get_field('hero_head') ) : ?>
      <h1><?php the_field('hero_head'); ?></h1>
    <?php endif; ?>
    <?php if ( get_field('hero_subhead') ) : ?>
      <p><?php the_field('hero_subhead'); ?></p>
    <?php endif; ?>
  </div>
  <div class="hero__image  hero__image--gray-4">
  </div>
</header>

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
    <div class="row  column">
      <h2>Open Positions</h2>
    </div>
    <?php if(have_rows('open_positions')) :
      while(have_rows('open_positions')): the_row(); $c++; ?>
      <div class="[ band  band--small <?php if ($c % 2 == 0) echo 'band--tint'; ?> ]">
      <div class="row  column">
        <h3><?php the_sub_field('job_title'); ?></h3>
        <p><?php the_sub_field('job_description'); ?></p>
        <?php if(have_rows('job_requirements')) : ?>
          <h4>Requirements</h4>
          <ul>
          <?php while(have_rows('job_requirements')): the_row(); ?>
            <li><?php the_sub_field('job_requirement'); ?></li>
          <?php
            endwhile;
            echo '</ul>';
            endif;
          ?>
        <a href="mailto:careers@houseadv.com" class="small  button  hvr-sweep-to-right  hvr-sweep-to-right--gold">Submit Resumé</a>
      </div>
      </div>
      <?php
        endwhile;
        else :
          echo "<p>We have no open positions at this time.</p>";
        endif;
      ?>

<?php get_footer();
