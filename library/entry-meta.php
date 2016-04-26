<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
  function foundationpress_entry_meta() {
    $category = get_the_category();
    echo '<span class="byline  byline__category">' . $category[0]->cat_name . '</span>';
    echo '<time class="byline  byline__date  updated" datetime="' . get_the_time( 'c' ) . '">' . sprintf( __( '%s', 'foundationpress' ), get_the_date(), get_the_time() ) . '</time>';
    /*
    echo '<p class="byline author">' . __( 'Written by', 'foundationpress' ) . ' <a href="' . get_author_posts_url( get_the_author_meta( 'ID' ) ) . '" rel="author" class="fn">' . get_the_author() . '</a></p>';
     */
  }
endif;
