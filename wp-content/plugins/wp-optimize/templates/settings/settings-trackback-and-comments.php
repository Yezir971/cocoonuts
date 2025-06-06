<?php if (!defined('WPO_VERSION')) die('No direct access allowed'); ?>
<?php
$trackback_action_arr = $options->get_option('trackbacks_action', array());
$comments_action_arr = $options->get_option('comments_action', array());
?>
<h3><?php esc_html_e('Trackback/comments actions', 'wp-optimize'); ?></h3>
<div class="wpo-fieldgroup">
	<div class="wpo-fieldgroup__subgroup">
		<h3 class="wpo-first-child"><?php esc_html_e('Trackbacks', 'wp-optimize'); ?></h3>

		<div id="trackbacks_notice"></div>

		<p>
			<small><?php esc_html_e('Use these buttons to enable or disable any future trackbacks on all your previously published posts.', 'wp-optimize'); ?></small>
		</p>
		
		<p>
			<button class="button btn-updraftplus" type="button" id="wp-optimize-disable-enable-trackbacks-enable" name="wp-optimize-disable-enable-trackbacks-enable"><?php esc_html_e('Enable', 'wp-optimize'); ?></button>
			
			<button class="button btn-updraftplus" type="button" id="wp-optimize-disable-enable-trackbacks-disable" name="wp-optimize-disable-enable-trackbacks-disable"><?php esc_html_e('Disable', 'wp-optimize'); ?></button>
			<img id="trackbacks_spinner" class="wpo_spinner" src="<?php echo esc_url(admin_url('images/spinner-2x.gif')); // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage -- N/A ?>" alt="...">
			<span id="trackbacks_actionmsg">	
			<?php
			if (!empty($trackback_action_arr)) {
				
				$trackback_action_timestamp = WP_Optimize()->format_date_time($trackback_action_arr['timestamp']);
				if ($trackback_action_arr['action']) {
					// translators: %s is a date and time
					printf(esc_html__('All trackbacks on existing posts were enabled on the %s.', 'wp-optimize'), esc_html($trackback_action_timestamp));
				} else {
					// translators: %s is a date and time
					printf(esc_html__('All trackbacks on existing posts were disabled on the %s.', 'wp-optimize'), esc_html($trackback_action_timestamp));
				}
			
			}
			?>
			</span>
		</p>

	</div>

	<div class="wpo-fieldgroup__subgroup">

		<h3><?php esc_html_e('Comments', 'wp-optimize'); ?></h3>
		
		<div id="comments_notice"></div>

		<p><small><?php esc_html_e('Use these buttons to enable or disable any future comments on all your previously published posts.', 'wp-optimize'); ?></small></p>

		<p>
			<button class="button btn-updraftplus" type="button" id="wp-optimize-disable-enable-comments-enable" name="wp-optimize-disable-enable-comments-enable"><?php esc_html_e('Enable', 'wp-optimize'); ?></button>

			<button class="button btn-updraftplus" type="button" id="wp-optimize-disable-enable-comments-disable" name="wp-optimize-disable-enable-comments-disable"><?php esc_html_e('Disable', 'wp-optimize'); ?></button>

			<img id="comments_spinner" class="wpo_spinner" src="<?php echo esc_url(admin_url('images/spinner-2x.gif')); // phpcs:ignore PluginCheck.CodeAnalysis.ImageFunctions.NonEnqueuedImage -- N/A ?>" alt="...">
			<span id="comments_actionmsg">
			<?php
			if (!empty($comments_action_arr)) {
				
				$comments_action_timestamp = WP_Optimize()->format_date_time($comments_action_arr['timestamp']);
				if ($comments_action_arr['action']) {
					// translators: %s is a date and time
					printf(esc_html__('All comments on existing posts were enabled on the %s.', 'wp-optimize'), esc_html($comments_action_timestamp));
				} else {
					// translators: %s is a date and time
					printf(esc_html__('All comments on existing posts were disabled on the %s.', 'wp-optimize'), esc_html($comments_action_timestamp));
				}
			
			}
			?>
			</span>
		</p>

	</div>
</div>
