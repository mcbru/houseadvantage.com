<?php
/**
 * The template used for displaying teammate content in about.php
 */
?>

<div id="post-<?php the_ID(); ?>" <?php post_class('teammate  row'); ?>>
  <div class="small-12  medium-2  column">
    <?php if(has_post_thumbnail()) :
      the_post_thumbnail('post_thumbnail', array('data-os-animation' => 'fadeIn', 'data-os-animation-delay' => '0s'));
    endif; ?>
  </div>
  <div class="small-12  medium-10  column">
    <h2 class="red"><?php the_title(); ?></h2>
    <?php if ( get_field('role') ) : ?>
      <h3><?php the_field('role'); ?></h3>
    <?php endif; ?>
    <?php the_content(); ?>
    <ul class="menu  icon-menu">
      <li><a class="red" href="<?php echo get_field('linkedin') ?: 'https://www.linkedin.com/company/house-advantage-llc'; ?>"><i class="fa  fa-linkedin-square"></i></a></li>
      <li><a class="red" href="<?php echo get_field('twitter') ?: 'https://twitter.com/houseadv'; ?>"><i class="fa  fa-twitter-square"></i></a></li>
    </ul>
  </div>
</div>
