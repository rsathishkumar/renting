<?php
/**
 * Settings page template.
 *
 * @package WP_Video_Popup_PRO
 */

defined( 'ABSPATH' ) || die( "Can't access directly" );

?>

<div class="wrap settingstuff">

	<h1><?php echo esc_html( get_admin_page_title() ); ?></h1>

	<form method="post" action="options.php">
		<?php settings_fields( 'wp-video-popup-settings-group' ); ?>

		<div class="wpvp-admin-page">
			<div class="left-section">

				<div class="neatbox has-subboxes has-medium-gap has-bigger-heading is-smooth disable-color-picker">
					<?php do_settings_sections( 'wp-video-popup-settings' ); ?>
					<?php do_settings_sections( 'wp-video-popup-pro-settings' ); ?>
				</div>

			</div>
			<div class="right-section">

				<?php
				require __DIR__ . '/metaboxes/documentation.php';
				require __DIR__ . '/metaboxes/review.php';
				?>

			</div>
		</div>

	</form>

</div>
