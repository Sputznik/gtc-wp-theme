<?php
$subtitle     =  get_post_meta( $post->ID, 'subtitle', true );
$pdf_url      =  get_post_meta( $post->ID, 'pdf_link', true );
$external_url =  get_post_meta( $post->ID, 'external_link', true );
$thumbnail    = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
$asterisk_url = GTC_THEME_URI.'/assets/images/asterisk.png';
?>
<div class="post-header wrapper-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="post-meta">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <?php if( $subtitle ): ?>
            <h3 class="subtitle"><?php _e( $subtitle ); ?></h4>
          <?php endif; ?>
          <hr/>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <?php if( $pdf_url ): ?>
            <a href="<?php _e( $pdf_url ); ?>" class="btn-gtc btn-gtc-download" download>
              <span class="btn-icon" style="background-image: url(<?php _e($asterisk_url); ?>);"></span>
              DOWNLOAD PDF VERSION
            </a>
          <?php endif; ?>
          <?php if( $external_url ): ?>
            <a href="<?php _e( $external_url ); ?>" class="btn-gtc">
              <span class="btn-icon" style="background-image: url(<?php _e($asterisk_url); ?>);"></span>
              VISIT WEBSITE
            </a>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-sm-5">
        <?php if( !empty( $thumbnail ) ): ?>
          <div class="orbit-thumbnail-bg" style="background-image: url( <?php _e( $thumbnail );?> );"></div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>
