<?php
  $permalink      = get_the_permalink();
  $thumbnail      = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
  $background_img = !empty( $thumbnail ) ? 'style="background-image:url('.$thumbnail.');"' : "";
?>
<div class="orbit-thumbnail-bg" <?php _e( $background_img ); ?>><a href="<?php _e( $permalink );?>"></a></div>
<div class="post-desc">
  <div class="post-categories"><?php the_category(', '); ?></div>
  <h3 class="post-title"><a href="<?php _e( $permalink );?>"><?php the_title();?></a></h3>
  <div class="post-excerpt"><?php the_excerpt(); ?><a class="read-more" href="<?php _e( $permalink );?>">Read more</a></div>
  <span class="meta text-capitalize"><?php the_time( 'j F Y' );?></span>
</div>
