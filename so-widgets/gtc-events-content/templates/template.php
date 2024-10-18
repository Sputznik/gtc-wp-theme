<?php
$convenors           = $instance['convenors'];
$event_recording_url = $instance['event_recording_url'];
?>
<div class="gtc-events-content">
  <div class="col-left"><?php echo $instance['event_content']; ?></div>
  <div class="col-right">
    <?php if( $event_recording_url && $youtube_embed = wp_oembed_get( $event_recording_url ) ): ?>
      <div class="event-recording">
        <h3 class="title">Event Recording</h3>
        <div class="gtc-fluid-video">
          <?php echo $youtube_embed; ?>
        </div>
      </div>
    <?php endif;?>
    <?php if( count( $convenors ) ): ?>
      <div class="event-convenors">
        <h3 class="title">Convenors</h3>
        <div class="logos">
          <?php foreach( $convenors as $item ): ?>
            <div class="logo-wrapper">
              <a href="<?php _e( $item['site_url'] ); ?>">
                <?php echo wp_get_attachment_image( $item['site_logo'] ); ?>
              </a>
            </div>
          <?php endforeach;?>
        </div>
      </div>
    <?php endif;?>
  </div>
</div>
