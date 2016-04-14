<?php
/**
 * The template used for displaying teammate content in about.php
 */
?>

<section class="[ band ]">
  <div id="post-<?php the_ID(); ?>" <?php post_class('teammate, row'); ?>>
    <div class="small-12  medium-2  column">
        <?php if(has_post_thumbnail()) :
          the_post_thumbnail();
        else : ?>
          <img alt="" class="thumbnail" src="http://fakeimg.pl/500x500">
        <?php endif; ?>
    </div>
    <div class="small-12  medium-10  column">
      <h2><?php the_title(); ?>
        <?php if ( get_field('role') ) : ?>
          <small><?php the_field('role'); ?></small>
        <?php endif; ?>
      </h2>
      <?php the_content(); ?>
    </div>
  </div>
</section>
