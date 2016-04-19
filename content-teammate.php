<?php
/**
 * The template used for displaying teammate content in about.php
 */
?>

<section class="[ band ]">
  <div id="post-<?php the_ID(); ?>" <?php post_class('teammate  row'); ?>>
    <div class="small-12  medium-2  column">
      <?php if(has_post_thumbnail()) :
        the_post_thumbnail();
      else : ?>
        <img alt="" class="thumbnail" src="http://fakeimg.pl/500x500">
      <?php endif; ?>
    </div>
    <div class="small-12  medium-10  column">
      <h2 class="gamma"><?php the_title(); ?></h2>
      <?php if ( get_field('role') ) : ?>
        <h3 class="gamma"><strong><?php the_field('role'); ?></strong></h3>
      <?php endif; ?>
      <?php the_content(); ?>
      <ul class="menu  icon-menu">
        <li><a href="https://www.linkedin.com/company/house-advantage-llc"><i class="fa  fa-linkedin-square"></i></a></li>
        <li><a href="https://twitter.com/houseadv"><i class="fa  fa-twitter-square"></i></a></li>
      </ul>
    </div>
  </div>
</section>
