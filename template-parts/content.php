<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>


<div class="column">
  <article class="main-content">
    <div id="post-<?php the_ID(); ?>" <?php post_class('blogpost-entry'); ?>>
      <header>
        <h2 class="gamma">
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php foundationpress_entry_meta(); ?>
        <?php /*
        <?php if(has_post_thumbnail()) :
          the_post_thumbnail();
        else : ?>
          <img src="http://placehold.it/1140x500" alt="" />
        <?php endif; ?>
         */ ?>
      </header>
      <?php /*
      <div class="entry-content">
        <?php the_content( __( 'Continue reading...', 'foundationpress' ) ); ?>
      </div>
      <footer>
        <?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
      </footer>
       */ ?>
    </div>
  </article>
    <hr />
</div>
