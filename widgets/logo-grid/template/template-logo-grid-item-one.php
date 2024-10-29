<?php
/**
 * Template Style One for Logo Grid
 *
 * @package AbsoluteAddons
 */

?>
<div class="image-grid">
	<?php foreach ( $settings['logo-grid-gallery'] as $logo ) : ?>
		<div class="absp-logo-grid-item"><img src="<?php echo esc_url( $logo['url'] ) ?>"></div>
	<?php endforeach; ?>
</div>
