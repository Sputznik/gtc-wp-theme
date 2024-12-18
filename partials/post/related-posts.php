<?php
/**
 * The template for displaying related posts based on post-categories.
 */
$post_id = get_the_ID();
$categories = wp_get_post_categories( $post_id, ['ids'] );
$cats_str = implode(',', $categories);
$shortcode_str = do_shortcode("[orbit_query posts_per_page='3' style='grid3' cat='".$cats_str."' post__not_in='".$post_id."']");
if( $cats_str && strlen( $shortcode_str ) > 0 ): ?>
  <div class="related-posts">
    <h2 class="headline text-center">Related Posts</h2>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <?php echo $shortcode_str;?>
        </div>
      </div>
    </div>
  </div>
<?php endif;?>
