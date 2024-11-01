<?php
/**
 * The template for displaying category page
 */
get_header();
$category = $wp_query->get_queried_object();
?>
<div class="category-header archive-header wrapper-margin gtc-page-header-bg">
  <div class="container">
    <h1 class="page-title text-capitalize text-center"><?php _e( $category->name ); ?></h1>
  </div>
</div>
<div class="container">
  <div class="articles-post-list-wrap">
    <?php echo do_shortcode("[orbit_query posts_per_page='9' style='grid3' cat='".$category->term_id."' pagination='1']"); ?>
  </div>
</div>
<?php get_footer(); ?>
