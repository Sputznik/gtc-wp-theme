<?php
$pdf_url =  get_post_meta( $post->ID, 'pdf_link', true );
?>
<div class="post-header wrapper-header">
  <div class="container">
    <div class="row">
      <div class="col-sm-7">
        <div class="post-meta">
          <h1 class="post-title"><?php the_title(); ?></h1>
          <div class="post-excerpt">
            <?php the_excerpt(); ?>
          </div>
          <?php if( $pdf_url ): ?>
            <a href="<?php _e( $pdf_url ); ?>" class="btn-gtc" download>
              <span class="btn-icon" style="background-image: url(<?php _e(GTC_THEME_URI.'/assets/images/asterisk.png'); ?>);"></span>
              DOWNLOAD PDF VERSION
            </a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</div>
