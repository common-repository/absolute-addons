<?php
/**
 * Template Style One for Fun Fact
 *
 * @package AbsoluteAddons
 */
defined( 'ABSPATH' ) || exit;

/**
 * @var array $settings
 */
?>
<div class="fun-fact-item">
	<div class="fun-fact-flex-wrapper">
		<div class="fun-fact-flex-inner">
			<?php $this->render_fact_icon( $settings ); ?>
		</div>
		<?php if ( ! empty( $settings['fun_fact_title'] ) ) { ?>
			<div class="fun-fact-flex-inner">
				<h2 <?php $this->print_render_attribute_string( 'fun_fact_title' ); ?>><?php absp_render_title( $settings['fun_fact_title'] ); ?></h2>
			</div>
		<?php } ?>
	</div>
	<?php if ( 'true' === $settings['fun_fact_separator_enable'] ) : ?>
		<span class="fun-fact-separate"></span>
	<?php endif; ?>

	<?php if ( ! empty( $settings['fun_fact_number'] ) ) { ?>
		<div class="fun-fact-number-wrapper">
			<span <?php $this->print_render_attribute_string( 'absp-fun-fact' ); ?>><?php echo esc_html( $settings['fun_fact_number'] ) ?></span>
		</div>
	<?php } ?>
	<?php if ( ! empty( $settings['fun_fact_sub_title'] ) ) { ?>
		<span <?php $this->print_render_attribute_string( 'fun_fact_sub_title' ); ?>><?php absp_render_title( $settings['fun_fact_sub_title'] ); ?></span>
	<?php } ?>
	<?php $this->render_fun_fact_button( $settings ); ?>
</div>
