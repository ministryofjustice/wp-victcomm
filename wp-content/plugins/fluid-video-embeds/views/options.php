<script type="text/javascript">var __namespace = '<?php echo $namespace; ?>';</script>
<div class="wrap <?php echo $namespace; ?>">
    <h2><?php echo $page_title; ?></h2>
    <form action="" method="post" id="<?php echo $namespace; ?>-form">
        <?php wp_nonce_field( $namespace . "-update-options" ); ?>
        <ul>
            <li class="fve_max_width settings-group">
                <h3><?php _e( 'Maximum Width', $namespace ); ?></h3>
                <label for="fve_max_width"><?php _e( 'Max width:', $namespace ); ?></label>
                <input id="fve_max_width" name="data[fve_max_width]" size="3" value="<?php echo $this->fve_max_width; ?>">
                <p class="description"><?php echo sprintf( __( 'Set this to %1$s0%2$s for no max width. Otherwise, use pixels, or ems. (eg: %1$s500px%2$s or %1$s22em%2$s)', $namespace ), '<code>', '</code>' ); ?></p>
            </li>
            <li class="fve_alignment settings-group">
                <h3><?php _e( 'Container Alignment', $namespace ); ?></h3>
                <input id="fve_alignment_left" name="data[fve_alignment]" type="radio" size="3" value="left"<?php echo ( $this->fve_alignment == 'left' ) ? ' checked="checked"' : ''; ?>>
                <label for="fve_alignment_left"><?php _e( 'Left', $namespace ); ?></label>
                <input id="fve_alignment_center" name="data[fve_alignment]" type="radio" size="3" value="center"<?php echo ( $this->fve_alignment == 'center' ) ? ' checked="checked"' : ''; ?>>
                <label for="fve_alignment_center"><?php _e( 'Center', $namespace ); ?></label>
                <input id="fve_alignment_right" name="data[fve_alignment]" type="radio" size="3" value="right"<?php echo ( $this->fve_alignment == 'right' ) ? ' checked="checked"' : ''; ?>>
                <label for="fve_alignment_right"><?php _e( 'Right', $namespace ); ?></label>
                <p class="description"><?php _e( 'If the width is smaller, how should the video be aligned?', $namespace ); ?></p>
            </li>
            <li class="fve_responsive_hyperlink settings-group">
                <h3><?php _e( 'Responsive Hyperlink Options', $namespace ); ?></h3>
                <input id="fve_responsive_hyperlink" name="data[fve_responsive_hyperlink]" type="checkbox" size="3" value="yes"<?php echo ( $this->fve_responsive_hyperlink == true ) ? ' checked="checked"' : ''; ?>>
                <label for="fve_responsive_hyperlink"><?php _e( 'Use Responsive Hyperlink?', $namespace ); ?></label>

                <div id="fve_breakpoint_group">
                    <label for="fve_responsive_hyperlink_mq"><?php _e( 'Media Query:', $namespace ); ?></label>
                    <input id="fve_responsive_hyperlink_mq" name="data[fve_responsive_hyperlink_mq]" size="60" value="<?php echo $this->fve_responsive_hyperlink_mq; ?>"> <span class="description"><?php _e( 'Erase this field and save the settings to reset.', $namespace ); ?></span>

                    <p class="description"><?php _e( 'The Responsive Hyperlink option will swap the video iFrame with a simple hyperlink to the video URL (if the screen is smaller than the specified breakpoint). On mobile and handheld devices, it is often a better experience to watch the video in the native application or media player. This option tries to enable that better experience. When this option is enabled, the video will show up as a hyperlinked image instead of an actual video player.', $namespace ); ?></p>
                </div>
            </li>
            <li class="fve_youtube_options settings-group">
                <h3><?php _e( 'YouTube Options', $namespace ); ?></h3>
                <input id="fve_force_youtube_16_9" name="data[fve_force_youtube_16_9]" type="checkbox" size="3" value="yes"<?php echo ( $this->fve_force_youtube_16_9 == true ) ? ' checked="checked"' : ''; ?>>
                <label for="fve_force_youtube_16_9"><?php _e( 'Force 16:9 aspect Ratio?', $namespace ); ?></label>

                <p class="description"><?php _e( 'Disables aspect ratio detection for YouTube.', $namespace ); ?></p>
                <p class="description"><?php _e( 'Although YouTube videos uploaded at a 4:3 ratio look better in a 4:3 player, some people have YouTube videos that are 480p but 16:9. This option makes 480p 16:9 videos look better.', $namespace ); ?></p>
            </li>
            <li class="submit-row">
                <input type="submit" name="submit" class="button-primary" value="<?php _e( "Save Changes", $namespace ) ?>" />
            </li>
        </ul>
    </form>
</div>
