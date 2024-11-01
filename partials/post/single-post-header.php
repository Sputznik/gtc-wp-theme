<?php
$pdf_url   =  get_post_meta( $post->ID, 'pdf_link', true );
$thumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' )[0];
?>
<div class="post-header wrapper-header gtc-post-header-bg">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="post-meta">
          <h1><?php the_title(); ?></h1>
          <span><?php the_time( 'j F Y' ); ?></span>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <?php if( $pdf_url ): ?>
            <div class="header-actions">
              <a href="<?php _e( $pdf_url ); ?>" class="btn-gtc btn-gtc-download" download>
                <span class="btn-icon" style="background-image: url(<?php _e(GTC_THEME_URI.'/assets/images/asterisk.png'); ?>);"></span>
                DOWNLOAD PDF VERSION
              </a>
            </div>
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
