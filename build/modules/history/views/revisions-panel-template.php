<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<script type="text/template" id="tmpl-elementor-panel-revisions">
	<div class="elementor-panel-box">
	<div class="elementor-panel-scheme-buttons">
			<div class="elementor-panel-scheme-button-wrapper elementor-panel-scheme-discard">
				<button class="elementor-button" disabled>
					<i class="eicon-close" aria-hidden="true"></i>
<<<<<<< HEAD
					<?php echo esc_html__( 'Discard', 'elementor' ); ?>
=======
					<?php echo __( 'Discard', 'elementor' ); ?>
>>>>>>> dist
				</button>
			</div>
			<div class="elementor-panel-scheme-button-wrapper elementor-panel-scheme-save">
				<button class="elementor-button elementor-button-success" disabled>
<<<<<<< HEAD
					<?php echo esc_html__( 'Apply', 'elementor' ); ?>
=======
					<?php echo __( 'Apply', 'elementor' ); ?>
>>>>>>> dist
				</button>
			</div>
		</div>
	</div>

	<div class="elementor-panel-box">
		<div class="elementor-panel-heading">
<<<<<<< HEAD
			<div class="elementor-panel-heading-title"><?php echo esc_html__( 'Revisions', 'elementor' ); ?></div>
=======
			<div class="elementor-panel-heading-title"><?php echo __( 'Revisions', 'elementor' ); ?></div>
>>>>>>> dist
		</div>
		<div id="elementor-revisions-list" class="elementor-panel-box-content"></div>
	</div>
</script>

<script type="text/template" id="tmpl-elementor-panel-revisions-no-revisions">
	<#
<<<<<<< HEAD
	var no_revisions_1 = '<?php echo esc_html__( 'Revision history lets you save your previous versions of your work, and restore them any time.', 'elementor' ); ?>',
		no_revisions_2 = '<?php echo esc_html__( 'Start designing your page and you will be able to see the entire revision history here.', 'elementor' ); ?>',
		revisions_disabled_1 = '<?php echo esc_html__( 'It looks like the post revision feature is unavailable in your website.', 'elementor' ); ?>',
		revisions_disabled_2 = '<?php printf(
			/* translators: %1$s Link open tag, %2$s: Link close tag. */
			esc_html__( 'Learn more about %1$sWordPress revisions%2$s', 'elementor' ),
			'<a target="_blank" href="https://go.elementor.com/wordpress-revisions/">',
			'</a>'
		); ?>';
	#>
	<img class="elementor-nerd-box-icon" src="<?php
	// PHPCS - Safe Elementor SVG
	echo ELEMENTOR_ASSETS_URL . 'images/information.svg' // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" />
	<div class="elementor-nerd-box-title"><?php echo esc_html__( 'No Revisions Saved Yet', 'elementor' ); ?></div>
=======
	var no_revisions_1 = '<?php echo __( 'Revision history lets you save your previous versions of your work, and restore them any time.', 'elementor' ); ?>',
		no_revisions_2 = '<?php echo __( 'Start designing your page and you will be able to see the entire revision history here.', 'elementor' ); ?>',
		revisions_disabled_1 = '<?php echo __( 'It looks like the post revision feature is unavailable in your website.', 'elementor' ); ?>',
		revisions_disabled_2 = '<?php printf( __( 'Learn more about <a target="_blank" href="%s">WordPress revisions</a>', 'elementor' ), 'https://go.elementor.com/wordpress-revisions/' ); /* translators: %s: Codex URL */ ?>';
	#>
	<img class="elementor-nerd-box-icon" src="<?php echo ELEMENTOR_ASSETS_URL . 'images/information.svg'; ?>" />
	<div class="elementor-nerd-box-title"><?php echo __( 'No Revisions Saved Yet', 'elementor' ); ?></div>
>>>>>>> dist
	<div class="elementor-nerd-box-message">{{{ elementor.config.document.revisions.enabled ? no_revisions_1 : revisions_disabled_1 }}}</div>
	<div class="elementor-nerd-box-message">{{{ elementor.config.document.revisions.enabled ? no_revisions_2 : revisions_disabled_2 }}}</div>
</script>

<script type="text/template" id="tmpl-elementor-panel-revisions-loading">
	<i class="eicon-loading eicon-animation-spin" aria-hidden="true"></i>
</script>

<script type="text/template" id="tmpl-elementor-panel-revisions-revision-item">
	<div class="elementor-revision-item__wrapper {{ type }}">
		<div class="elementor-revision-item__gravatar">{{{ gravatar }}}</div>
		<div class="elementor-revision-item__details">
			<div class="elementor-revision-date" title="{{{ new Date( timestamp * 1000 ) }}}">{{{ date }}}</div>
			<div class="elementor-revision-meta">
				<span>{{{ typeLabel }}}</span>
<<<<<<< HEAD
				<?php echo esc_html__( 'By', 'elementor' ); ?> {{{ author }}}
=======
				<?php echo __( 'By', 'elementor' ); ?> {{{ author }}}
>>>>>>> dist
				<span>(#{{{ id }}})</span>&nbsp;
			</div>
		</div>
		<div class="elementor-revision-item__tools">
			<# if ( 'current' === type ) { #>
				<i class="elementor-revision-item__tools-current eicon-star" aria-hidden="true"></i>
<<<<<<< HEAD
				<span class="elementor-screen-only"><?php echo esc_html__( 'Current', 'elementor' ); ?></span>
=======
				<span class="elementor-screen-only"><?php echo __( 'Current', 'elementor' ); ?></span>
>>>>>>> dist
			<# } #>

			<i class="elementor-revision-item__tools-spinner eicon-loading eicon-animation-spin" aria-hidden="true"></i>
		</div>
	</div>
</script>
